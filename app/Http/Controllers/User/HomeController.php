<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\SanPhamModel;
use App\Models\User\LoaiSanPhamModel;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facade\Redirect;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $sp = DB::table('sanpham')->where('Status', '1')->orderby('idSanPham')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.home',compact('sp', 'lsp'));
    }
    public function gioiThieu(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.gioiThieu',compact('sp', 'lsp'));
    }
    public function tinTuc(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.tinTuc',compact('sp', 'lsp'));
    }
    public function danhMuc(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.danhMuc',compact('sp', 'lsp'));
    }
    public function sanPham(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.sanPham',compact('sp', 'lsp'));
    }
    public function SanPhamSauGion(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.SanPhamSauGion',compact('sp', 'lsp'));
    }
    public function gioHang(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.gioHang',compact('sp', 'lsp'));
    }
    public function thanhToan(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.thanhToan',compact('sp', 'lsp'));
    }
    public function ttkh(){
        $sp = SanPhamModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.ttkh',compact('sp', 'lsp'));
    }
    public function search_product(Request $request){
        $keywords = Str::ascii($request->keywords_submit);
        $search_product = DB::table('sanpham')->where('tenSanPham', 'like','%'.$keywords.'%')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.partials.search-product',compact('search_product', 'lsp'));
    }

}
