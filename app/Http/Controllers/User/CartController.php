<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\SanPhamModel;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Cart;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $idSP = $request->idSP_hidden;
        $sl = $request->soLuong;
        $product_info = DB::table('sanpham')->where('idSanPham',$idSP)->first();
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);


        $data['id'] = $product_info->idSanPham;
        $data['qty'] = $sl;
        $data['name'] = $product_info->tenSanPham;
        $data['price'] = $product_info->giaBan;
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->hinhAnh;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/show_cart');
        
    }
    public function show_cart(){
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.gioHang',compact('lsp'));
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
    public function update(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
    
        // Lấy thông tin sản phẩm từ giỏ hàng
        $cartItem = Cart::get($rowId);
    
        // Lấy số lượng của sản phẩm từ cơ sở dữ liệu
        $product = DB::table('sanpham')->where('idSanPham', $cartItem->id)->value('soLuong');
    
        // Kiểm tra nếu số lượng mới lớn hơn số lượng trong dữ liệu
        if ($qty > $product) {
            return redirect('/show_cart')->with('error', 'Số lượng mới lớn hơn số lượng của sản phẩm.');
        } else {
            // Nếu không có lỗi, thực hiện cập nhật số lượng
            Cart::update($rowId, $qty);
            return redirect('/show_cart');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::update($rowId, 0); // Will update the quantity
        return Redirect::to('/show_cart');
    }
}
