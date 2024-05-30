<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SanPhamModel;
use App\Models\Admin\LSPModel;
use App\Models\Admin\NhaCungCapModel;
use App\Models\Admin\WareHouseModel;
use Illuminate\Http\Request;
use DB;
use Session;

class ImportGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsp = LSPModel::all();
        $sp = SanPhamModel::all();
        $ncc = NhaCungCapModel::all();
        return view('Admin.import_goods.add_import', compact('sp', 'lsp','ncc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Get all inputs
    $tenSanPham = $request->input('tenSanPham');
    $moTa = $request->input('moTa');
    $giaBan = $request->input('giaBan');
    $soLuong = $request->input('soLuong');
    $idLoaiSP = $request->input('idLoaiSP');
    $hinhAnh = $request->file('hinhAnh');
    $idNhaCungCap = $request->input('idNhaCungCap');
    $giaNhap = $request->input('giaNhap');
    $donViTinh = $request->input('donViTinh');
    $ngayNhap = $request->input('ngayNhap');
    $Status = $request->input('Status');

    // Initialize total amount
    $tongTien = 0;
    $total= 0;
    $tongNhap = 0;
    $a = 0;

    // $tenSanPham = $request->input('tenSanPham');
    // $sl1= 0;
    // // Kiểm tra nếu tên sản phẩm đã tồn tại trong cơ sở dữ liệu
    // $existingProduct = db::table('sanpham')->where('tenSanPham', $tenSanPham)->first();
    // $sl = null;
    // foreach($existingProduct as $key){
    //     $sl = $existingProduct->soLuong;
    // }
    // dd($sl);

    
    
    
    // Loop through each product entry and save it
    for ($i = 0; $i < count($tenSanPham); $i++) {
        // Get supplier name
        $ncc = DB::table('nhacungcap')->where('idNhaCungCap', $idNhaCungCap[$i])->first();
        $tenNCC = $ncc ? $ncc->tenNhaCungCap : null;

        // Get product type name
        $lsp = DB::table('loaisanpham')->where('idLoaiSP', $idLoaiSP[$i])->first();
        $tenLSP = $lsp ? $lsp->tenLoaiSP : null;

        // if($tenSanPham == )
        $data = [
            'tenSanPham' => $tenSanPham[$i],
            'moTa' => $moTa[$i],
            'giaBan' => $giaBan[$i],
            'soLuong' => $soLuong[$i],
            'idLoaiSP' => $idLoaiSP[$i],
            'Status' => $Status[$i] ? 1 : 0,
        ];

        // Handle file upload if provided
        if (isset($hinhAnh[$i])) {
            $file = $hinhAnh[$i];
            $fileName = $file->getClientOriginalName(); 
            $data['hinhAnh'] = $fileName; // Store only the filename
        }

        $idSP[] = DB::table('sanpham')->insertGetId($data);

        $data_WH = [
            'idSanPham' => $idSP[$i],
            'tenSanPham' => $tenSanPham[$i],
            'moTa' => $moTa[$i],
            'tenLoaiSP' => $tenLSP,
            'giaNhap' => $giaNhap[$i],
            'giaBan' => $giaBan[$i],
            'dvTinh' => $donViTinh[$i],
            'soLuongNhap' => $soLuong[$i],
            'tenNhaCungCap' => $tenNCC,
            'ngayNhap' => $ngayNhap[$i],
        ];

        if (isset($hinhAnh[$i])) {
            $data_WH['hinhAnh'] = $fileName; // Use the same file name
        }

        DB::table('tbl_warehouse')->insertGetId($data_WH);

        // $tongNhap += ();
        $data_HDN = [
            'idNhaCungCap' => $idNhaCungCap[0], // assuming all products have the same supplier
            'ngayNhap' => $ngayNhap[0], // assuming all products are entered on the same date
            'tongTien' => $soLuong[$i] * $giaNhap[$i],
        ];
       
    
        $idHDN = DB::table('hoadonnhap')->insertGetId($data_HDN);
        Session::put('idHDN',$idHDN);
        
    
      
              // Calculate total amount
              $tongTien += $giaNhap[$i] * $soLuong[$i];
              $data_CTHDN = [
                  'idHoaDonNhap' => Session::get('idHDN'),
                  'idSanPham' => $idSP[$i],
                  'tenSanPham' =>$tenSanPham[$i],
                  'soLuong' => $soLuong[$i],
                  'giaNhap' => $giaNhap[$i],
                  'thanhTien' => $giaNhap[$i] * $soLuong[$i],
              ];
              DB::table('cthoadonnhap')->insertGetId($data_CTHDN);
        
    }
    // dd($tongNhap);
    // $total += $tongTien;

   

    return redirect()->route('WareHouse')->with('success', 'Thêm thành công');
}


    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
