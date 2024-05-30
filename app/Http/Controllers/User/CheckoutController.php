<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\SanPhamModel;
use App\Models\Admin\KhachHangModel;
use App\Models\Admin\OrderModel;
use Illuminate\Http\Request;
use DB;
use Str;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Cart;
session_start();


class CheckoutController extends Controller
{
    public function show_home(Request $request){
        $Customer_email = $request->customer_email;
        $Customer_password = md5($request->customer_password);

        $result = DB::table('tbl_customers')->where('Customer_email',$Customer_email)->where('Customer_password',$Customer_password)->first();
        
    // dd($kh1);
        if($result){
            Session::put('Customer_id',$result->Customer_id);
            Session::put('Customer_name',$result->Customer_name);
            $kh = DB::table('khachhang')
        ->where('Customer_id', Session::get('Customer_id'))
        ->get();
    
    // Khởi tạo biến $kh1 trước vòng lặp để tránh lỗi khi không có bản ghi nào
    $kh1 = null;
    
    // Lặp qua collection để truy cập vào mỗi bản ghi và lấy giá trị của trường 'tenKhachHang'
    foreach ($kh as $customer) {
        $kh1 = $customer->idKhachHang;
        // Xử lý dữ liệu tại đây nếu cần
    }
    
    // Hoặc chỉ định một bản ghi cụ thể từ collection sử dụng first() nếu bạn chỉ muốn lấy một bản ghi đầu tiên
    $first_customer = $kh->first();
    if ($first_customer) {
        $kh1 = $first_customer->idKhachHang;
    }
    Session::put('idKhachHang',$kh1);
        //    dd(Session::get('idKhachHang'));
        
            return Redirect::to('/home')->with('kh',$kh);

        }
        else{
            Session::put('message','Email hoặc password sai');
            return Redirect::to('/login-Customers');

        }
    }
    
    public function login_Customers(){
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view("User.Login_Customers",compact('lsp'));
    }
    public function logout_Customers(){
        Session::flush();
        return Redirect::to("/login-Customers");
    }
    public function register_customer(){
        $sp = DB::table('sanpham')->where('Status', '1')->orderby('idSanPham')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.Register_Customers', compact('lsp','sp'));
    }
    public function add_customer(Request $request){
        $data = array();
        $data['Customer_name'] = $request->customer_name;
        $data['Customer_email'] = $request->customer_email;
        $data['Customer_password'] = md5($request->customer_password); // mã hóa password
        $data['Customer_phone'] = $request->customer_phone;
        $customer_id = DB::table('tbl_customers')->insertGetId($data);
        Session::put('Customer_id',$customer_id);
        Session::put('Customer_name',$request->customer_name);
        return Redirect::to('/login-Customers');
    }
    public function checkout(){
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view("User.thanhToan",compact('lsp'));
    }
    public function save_checkout_customer(Request $request){

        $data_payment = array();
        $data_payment['payment_method'] = $request->payment_cash;
        if( $data_payment['payment_method']){
            $data_payment['payment_status']="chờ xử lý";
        }
        $data_payment['payment_method'] = $request->payment_banking;
        if( $data_payment['payment_method']){
            $data_payment['payment_status']="chờ xử lý";
        }
        
        $payment_id = DB::table('tbl_payment')->insertGetId($data_payment);
        Session::put('payment_id',$payment_id);

        $data = array();
        $data['tenKhachHang'] = $request->tenKhachHang;
        $data['Customer_id'] = Session::get('Customer_id');
        $data['payment_id'] = $payment_id;
        $data['soDienThoai'] = $request->soDienThoai;
        $data['diaChi'] = $request->diaChi;
        $data['email'] = $request->email;
        $data['ngaySinh'] = $request->ngaySinh;
        $khachhang_id = DB::table('khachhang')->insertGetId($data);
        Session::put('idKhachHang',$khachhang_id);

        //get payment_method
        $randomString = Str::random(6); // Tạo chuỗi ngẫu nhiên gồm 6 ký tự
        $orderCode = $randomString . '_' . date("YmdHis"); // Kết hợp với ngày tháng đặt hàng


        //insert order
        $data_order = array();
        $data_order['Customer_id'] = Session::get('Customer_id');
        $data_order['idKhachHang'] = Session::get('idKhachHang');
        $data_order['payment_id'] = $payment_id;
        $data_order['order_total'] = Cart::subtotal();
        $data_order['order_note'] = $request->order_note;
        $data_order['order_code'] = $orderCode;
        $data_order['order_status'] = 0;
        $order_id = DB::table('tbl_order')->insertGetId($data_order);
        Session::put('order_id',$order_id);

        $content = Cart::content();
        //insert order_detail
        foreach($content as $v_content){
            $data_order_detail = array();
            $data_order_detail['order_id'] = $order_id;
            $data_order_detail['idSanPham'] = $v_content->id;
            $data_order_detail['tenSanPham'] = $v_content->name;
            $data_order_detail['giaBan'] = $v_content->price;
            $data_order_detail['product_sales_quantity'] = $v_content->qty;
            $order_detail_id = DB::table('tbl_order_detail')->insert($data_order_detail);
        }
        Cart::destroy();
        if($data_payment['payment_method']==1){
            return Redirect::to('/history');
        }
        else{
            return Redirect::to('/history');
        }
        
        //return Redirect::to('/payment');
    }
    public function save_payment_customer(Request $request){
        $n=0;
        $randomString = Str::random(6); // Tạo chuỗi ngẫu nhiên gồm 6 ký tự
        $orderCode = $randomString . '_' . date("YmdHis"); // Kết hợp với ngày tháng đặt hàng
        $kh = KhachHangModel::all();
        $data_order = array();
        $data_order['Customer_id'] = Session::get('Customer_id');
        $data_order['idKhachHang'] = $kh[$n]->idKhachHang;
        $data_order['payment_id'] =  $kh[$n]->payment_id;
        $data_order['order_code'] = $orderCode;
        $data_order['order_total'] = number_format(Cart::priceTotal(0,'.',''), 0, '.', ',');
        $data_order['order_status'] = 0;
        $order_id = DB::table('tbl_order')->insertGetId($data_order);
        Session::put('order_id',$order_id);

        $content = Cart::content();
        //insert order_detail
        foreach($content as $v_content){
            $data_order_detail = array();
            $data_order_detail['order_id'] = $order_id;
            $data_order_detail['idSanPham'] = $v_content->id;
            $data_order_detail['tenSanPham'] = $v_content->name;
            $data_order_detail['giaBan'] = $v_content->price;
            $data_order_detail['product_sales_quantity'] = $v_content->qty;
            $order_detail_id = DB::table('tbl_order_detail')->insert($data_order_detail);
        }
        // Cart::destroy();
        if(Session::get('payment_id')==1){
            return Redirect::to('/note');
        }
        else{
            return Redirect::to('/note');
        }
        
        //return Redirect::to('/payment');
    }
    public function note(){
        $sp = DB::table('sanpham')->orderby('idSanPham')->get();
        $info_kh = DB::table('tbl_customers')->orderBy('Customer_id')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.note_order',compact('lsp','info_kh','sp'));
    }
    public function note_his(Request $request) {
        // Tìm đơn hàng
        $orderNote = $request->input('order_note');

    // Tìm đơn hàng
    $order = OrderModel::find(Session::get('order_id'));

    if ($order) {
        // Cập nhật ghi chú của đơn hàng
        $order->order_note = $orderNote;
        $order->save();
        }
        // Chuyển hướng người dùng đến trang lịch sử
        Cart::destroy();
        return redirect('/history');
    }
    public function UnConfirm($order_id)
    {
        $order_status = $order = OrderModel::find($order_id);
        $order->order_status = 2;
        $order->save();
        // Find the order by ID
        return redirect('history_unConfirm');
    }
    public function history(){
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
        ->select('tbl_order.*', 'tbl_customers.*')
        ->orderby('tbl_order.order_id')->get();
        // dd($images);
        $sp = DB::table('sanpham')->orderby('idSanPham')->get();
        $info_kh = DB::table('tbl_customers')->orderBy('Customer_id')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.payment.handle',compact('lsp','info_kh','all_order','sp'));
    }
    public function show($order_id)
    {
        $sp = DB::table('sanpham')->orderby('idSanPham')->get();
        $info_kh = DB::table('tbl_customers')->orderBy('Customer_id')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
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
        return view('User.payment.detail', compact('order_byID','order','status','lsp','sp'));
    }
    public function history_confirm(){
        $all_order = DB::table('tbl_order')
        ->join('tbl_order_detail', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
        ->join('sanpham', 'tbl_order_detail.idSanPham', '=', 'sanpham.idSanPham')
        ->select('tbl_order.*', 'tbl_order_detail.*', 'sanpham.hinhAnh')
        ->orderBy('tbl_order.order_id')
        ->get();
    
        $idSP = [];
        $images = [];
        
        foreach ($all_order as $orderDetail) {
            $idSP[] = $orderDetail->idSanPham;
            $images[] = $orderDetail->hinhAnh;
        }
        // dd($images);
        $sp = DB::table('sanpham')->orderby('idSanPham')->get();
        $info_kh = DB::table('tbl_customers')->orderBy('Customer_id')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.payment.confirm',compact('lsp','info_kh','all_order','sp'));
    }
    public function history_unConfirm(){
        $all_order = DB::table('tbl_order')
        ->join('tbl_order_detail', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
        ->join('sanpham', 'tbl_order_detail.idSanPham', '=', 'sanpham.idSanPham')
        ->select('tbl_order.*', 'tbl_order_detail.*', 'sanpham.hinhAnh')
        ->orderBy('tbl_order.order_id')
        ->get();
    
        $idSP = [];
        $images = [];
        
        foreach ($all_order as $orderDetail) {
            $idSP[] = $orderDetail->idSanPham;
            $images[] = $orderDetail->hinhAnh;
        }
        // dd($images);
        $sp = DB::table('sanpham')->orderby('idSanPham')->get();
        $info_kh = DB::table('tbl_customers')->orderBy('Customer_id')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.payment.unConfirm',compact('lsp','info_kh','all_order','sp'));
    }

    
    // public function history(){
    //     $getorder = OrderModel::where('Customer_id', Session::get('Customer_id'))->orderby('order_id')->get();
    //     return view('User.payment',compact('getorder'));
    // }



}