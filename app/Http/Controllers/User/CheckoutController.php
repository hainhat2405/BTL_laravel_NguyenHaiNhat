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
        $Customer_password = $request->customer_password;

        $result = DB::table('tbl_customers')->where('Customer_email',$Customer_email)->where('Customer_password',$Customer_password)->first();
        if($result==true){
            Session::put('Customer_email',$result->Customer_email);
            Session::put('Customer_id',$result->Customer_id);
            return Redirect::to('/checkout');
        }
        else{
            Session::put('message','Email hoặc password sai');
            return Redirect::to('/login-Customers');

        }
    }
    
    public function login_Customers(){
        // $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP')->get();
        return view("User.Login_Customers");
    }
    public function register_customer(){
        return view('User.Register_Customers');
    }
    public function add_customer(Request $request){
        $data = array();
        $data['Customer_name'] = $request->customer_name;
        $data['Customer_email'] = $request->customer_email;
        $data['Customer_password'] = $request->customer_password;
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
        $data = array();
        $data['Shipping_name'] = $request->shipping_name;
        $data['Shipping_email'] = $request->shipping_email;
        $data['Shipping_phone'] = $request->shipping_phone;
        $data['Shipping_notes'] = $request->shipping_notes;
        $data['Shipping_address'] = $request->shipping_address;
        $Shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('Shipping_id',$Shipping_id);
        return Redirect::to('/payment');
    }
    public function payment(){
        echo "123";
    }


}