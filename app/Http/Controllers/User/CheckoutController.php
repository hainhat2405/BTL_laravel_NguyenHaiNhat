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
session_start();


class CheckoutController extends Controller
{
    public function show_home(Request $request){
        $Customer_email = $request->customer_email;
        $Customer_password = md5($request->customer_password);

        $result = DB::table('tbl_customers')->where('Customer_email',$Customer_email)->where('Customer_password',$Customer_password)->first();
        if($result){
            Session::put('Customer_id',$result->Customer_id);
            return Redirect::to('/home');
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
        return view('User.Register_Customers');
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
        
        // $data = array();
        // $data['Shipping_name'] = $request->Shipping_name;
        // $data['Shipping_email'] = $request->Shipping_email;
        // $data['Shipping_phone'] = $request->Shipping_phone;
        // $data['Shipping_notes'] = $request->Shipping_notes;
        // $data['Shipping_address'] = $request->Shipping_address;
        // $Shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        // Session::put('Shipping_id',$Shipping_id);
        $data = array();
        $data['tenKhachHang'] = $request->tenKhachHang;
        $data['soDienThoai'] = $request->soDienThoai;
        $data['diaChi'] = $request->diaChi;
        $data['email'] = $request->email;
        $data['ngaySinh'] = $request->ngaySinh;
        $khachhang_id = DB::table('khachhang')->insertGetId($data);
        Session::put('idKhachHang',$khachhang_id);

        //get payment_method
        $data_payment = array();
        $data_payment['payment_method'] = $request->payment_option;
        $data_payment['payment_status'] = "Dang cho xu ly";
        $payment_id = DB::table('tbl_payment')->insertGetId($data_payment);

        //insert order
        $data_order = array();
        $data_order['Customer_id'] = Session::get('Customer_id');
        $data_order['idKhachHang'] = Session::get('idKhachHang');
        $data_order['payment_id'] = $payment_id;
        $data_order['order_total'] = Cart::total();
        $data_order['order_status'] = "Dang cho xu ly";
        $order_id = DB::table('tbl_order')->insertGetId($data_order);

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
        if($data_payment['payment_method']==1){
            return Redirect::to('/payment');
        }
        else{
            return Redirect::to('/payment');
        }
        
        //return Redirect::to('/payment');
    }
    public function payment(){
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view('User.payment',compact('lsp'));
    }
    // public function


}