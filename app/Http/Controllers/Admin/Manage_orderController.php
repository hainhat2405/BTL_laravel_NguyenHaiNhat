<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\manageOrderModel;
use App\Models\Admin\OrderModel;
use App\Models\Admin\SanPhamModel;
use App\Models\Admin\OrderDetailModel;
use App\Models\Admin\KhachHangModel;
use App\Models\Admin\SalesInvoice;
use App\Models\Admin\SalesInvoiceDetail;
use App\Models\Admin\StatisticalModel;
use DB;
use Session;
class Manage_orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = manageOrderModel::paginate(5);
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
        ->select('tbl_order.*', 'tbl_customers.*')
        ->orderby('tbl_order.order_id')->get();

        return view('admin.manage_order.manageOrder',compact('all_order','order'));
    }
    public function viewConfirm(){
        $order = manageOrderModel::paginate(5);
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
        ->select('tbl_order.*', 'tbl_customers.*')
        ->orderby('tbl_order.order_id')->get();

        return view('admin.manage_order.confirm',compact('all_order','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request,$order_id)
    {

        // Fetch all orders including updated one
        $all_order = DB::table('tbl_order')
            ->join('tbl_customers', 'tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
            ->select('tbl_order.*', 'tbl_customers.*')
            ->orderBy('tbl_order.order_id')
            ->get();

        // Paginate the orders
        // $order = manageOrderModel::paginate(5);
        $order = OrderModel::find($order_id);
        if (!$order) {
            return abort(404); // Xử lý khi không tìm thấy đơn hàng
        }
    
        // Lấy tên khách hàng từ đơn hàng
        $idKH = $order->idKhachHang;
        $info_kh = KhachHangModel::find($idKH);
        // $tenKH = $info_kh->tenKhachHang;
        // dd($tenKH);
        // Tạo một đối tượng SalesInvoice và sao chép thông tin từ đơn hàng
        $salesInvoice = new SalesInvoice();
        $salesInvoice->idKhachHang = $order->idKhachHang;
        // $salesInvoice->idHoaDonBan = $order->idHoaDonBan;
        $salesInvoice->tenKhachHang = $info_kh->tenKhachHang;
        $salesInvoice->diaChi = $info_kh->diaChi;
        $salesInvoice->soDienThoai = $info_kh->soDienThoai;
        $salesInvoice->ngayBan = now(); // Đặt ngày bán là ngày hiện tại
        $salesInvoice->tongTien = $order->order_total;
        $salesInvoice->ghiChu = $order->order_note;
        $salesInvoice->MaDonHang = $order->order_code;
        // $salesInvoice->ghiChu = $order->ghiChu;
        $salesInvoice->save(); // Lưu hóa đơn vào cơ sở dữ liệu
        Session::put('salesInvoice',$salesInvoice);
        // Cập nhật trạng thái của đơn hàng thành "đã xác nhận"
        $order->order_status = 1;
        $order->save();

    
        // Lấy các mục chi tiết đơn hàng tương ứng với đơn hàng
        $orderDetails = OrderDetailModel::where('order_id', $order_id)->get();
        // Tạo các chi tiết hóa đơn bán hàng từ các mục chi tiết đơn hàng và lưu chúng vào cơ sở dữ liệu
        foreach ($orderDetails as $detail) {
            $product = SanPhamModel::find($detail->idSanPham);
            if ($product) {
                $product->soLuong -= $detail->product_sales_quantity;
                $product->save();
            } else {
                // Xử lý khi sản phẩm không tồn tại
                // Ví dụ: Bạn có thể ghi log hoặc thực hiện hành động phù hợp khác
            }
            $salesInvoiceDetailData['idHoaDonBan']=$salesInvoice->idHoaDonBan;
            $salesInvoiceDetailData['idSanPham']=$detail->idSanPham;
            $salesInvoiceDetailData['tenSanPham']=$detail->tenSanPham;
            $salesInvoiceDetailData['soLuong']=$detail->product_sales_quantity;
            $salesInvoiceDetailData['giaBan']=$detail->giaBan;
            $salesInvoiceDetailData['ngayBan']= $salesInvoice->ngayBan;
            $salesInvoiceDetailData['thanhTien']= $detail->product_sales_quantity* $detail->giaBan;
            $ctHDB = DB::table('cthoadonban')->insertGetId($salesInvoiceDetailData);
            Session::put('ctHDB', $ctHDB);

        }
        
        $infoHDB = db::table('cthoadonban')->where('idCTHoaDonBan',Session::get('ctHDB'))->get();

        // dd($infoHoa);
        $ngayBan = null;
        $soLuong = null;
        $tongTien = null;
        $idSPham = null;
        foreach($infoHDB as $key){
            $idSPham = $key->idSanPham;
            $ngayBan = $key->ngayBan;
            $soLuong = $key->soLuong;
        }
        $infoHoa = SalesInvoice::all();
        $ngayBan1 = null;
        foreach($infoHoa as $key){
            $ngayBan1 = $key->ngayBan;
        }
        $giaNhapHang = db::table('cthoadonnhap')->where('idSanPham',$idSPham)->get();
        $gia = null;
        foreach($giaNhapHang as $key){
            $gia = $key->giaNhap;
        }
        $tongGiaNhap = DB::table('cthoadonban')
            ->join('cthoadonnhap', 'cthoadonban.idSanPham', '=', 'cthoadonnhap.idSanPham')
            ->where('cthoadonban.idSanPham', $idSPham)
            ->select('cthoadonban.soLuong', 'cthoadonnhap.giaNhap')
            ->get();
        $soLuongBan = null;
        $giaNhapHangHoa = null;
        $tongTienHang = null;
        $profit = 0;
        $tot= 0;

    foreach($tongGiaNhap as $key){
        $soLuongBan = $key->soLuong;
        $giaNhapHangHoa = $key->giaNhap;
        $tongTienHang = $soLuongBan * $giaNhapHangHoa;
        $tot += $tongTienHang;
        }


        // dd($tot);
        $tongSL = null;
        $tongSoLuong = db::table('cthoadonban')
        ->select(DB::raw('IFNULL(SUM(cthoadonban.soLuong), 0) as tongSoLuong'))
        ->where('ngayBan', $ngayBan)
        ->get();

        foreach($tongSoLuong as $key){
        $tongSL = $key->tongSoLuong;
        }
    // dd($tot);
    $tongTienBanHang = db::table('hoadonban')
        ->select(DB::raw('IFNULL(SUM(hoadonban.tongTien) * 1000, 0) as tongTienBan'))
        ->where('ngayBan', $ngayBan)
        ->get();



    // $tongDonHang = db::table('hoadonban')->where('ngayBan',$ngayBan)->get();
    $tongDonHang = db::table('hoadonban')
                    ->where('ngayBan', $ngayBan)
                    ->count();


    foreach($tongTienBanHang as $key){
        $tongTien = $key->tongTienBan;
    }

    $profit = $tongTien - $tot;
    // dd($tongTien,$tot,$profit);
    // dd($ngayBan);
    // Assuming $salesInvoice is the instance of SalesInvoiceDetail


    // Check if there is statistical data for the order date
    $existingStatistical = StatisticalModel::where('order_date', $ngayBan)->first();
    // dd($existingStatistical);
    if ($existingStatistical) {
        // Update existing statistical data
        $existingStatistical->quantity = $tongSL;
        $existingStatistical->sales = $tongTien;
        $existingStatistical->profit = $profit;
        $existingStatistical->total_order =$tongDonHang ;
        $existingStatistical->save();
    }
    else {
        // Insert new statistical data
        $statistical = new StatisticalModel();
        $statistical->order_date = $ngayBan;
        $statistical->quantity = $tongSL;
        $statistical->sales = $tongTien;
        $statistical->profit = $profit;
        $statistical->total_order = $tongDonHang;
        $statistical->save();
    }

        session()->flash('success', 'Xác nhận đơn hàng thành công');
        return view('admin.manage_order.confirm', compact('order', 'all_order'));
    }

    public function viewUnConfirm(){
        $order = manageOrderModel::paginate(5);
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
        ->select('tbl_order.*', 'tbl_customers.*')
        ->orderby('tbl_order.order_id')->get();

        return view('admin.manage_order.unConfirm',compact('all_order','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $order_byID = DB::table('tbl_order')
        ->join('tbl_customers', 'tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
        ->join('khachHang', 'tbl_order.idKhachHang', '=', 'khachHang.idKhachHang')
        ->join('tbl_order_detail', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
        ->select('tbl_order.*', 'tbl_customers.*', 'khachHang.*', 'tbl_order_detail.*')
        ->where('tbl_order.order_id', $order_id)
        ->first();
        $order = DB::table('tbl_order_detail')
        ->join('tbl_order', 'tbl_order.order_id' , '=' , 'tbl_order_detail.order_id' )
        ->where('tbl_order_detail.order_id', $order_id)
        ->get();
        $status =  $order_byID->order_status;
        return view('admin.manage_order.detail_order', compact('order_byID','order','status'));
    }


  
}
