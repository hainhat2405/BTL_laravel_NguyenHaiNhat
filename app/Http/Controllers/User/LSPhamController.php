<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\LoaiSanPhamModel;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facade\Redirect;

class LSPhamController extends Controller
{
    public function show_category_home($idLoaiSP){
        $info_kh = DB::table('tbl_customers')->orderBy('Customer_id')->get();
        $sp = DB::table('sanpham')->where('Status', '1')->orderby('idSanPham')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        $id_LSP = DB::table('sanpham')
            ->join('loaisanpham', 'sanpham.idLoaiSP', '=', 'loaisanpham.idLoaiSP')
            ->where('sanpham.idLoaiSP', $idLoaiSP)
            ->select('loaisanpham.*', 'sanpham.*', 'loaisanpham.tenLoaiSP') // Thêm 'loaisanpham.tenLoaiSP' vào select
            ->get();
        return view('User.danhMuc',compact('sp','lsp','id_LSP','info_kh'));
    }
}
