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
        $sp = DB::table('sanpham')->where('Status', '1')->orderby('idSanPham','desc')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP','desc')->get();
        $id_LSP = DB::table('sanpham')
            ->join('loaisanpham', 'sanpham.idLoaiSP', '=', 'loaisanpham.idLoaiSP')
            ->where('sanpham.idLoaiSP', $idLoaiSP)
            ->get();
        

        return view('User.danhMuc',compact('sp','lsp','id_LSP'));
    }
}
