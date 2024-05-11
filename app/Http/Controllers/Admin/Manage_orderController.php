<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\manageOrderModel;
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
    public function confirm(Request $request)
    {
        $orderId = $request->input('order_id'); // Assuming you're passing order_id from the form
        
        // Update the order status to 1 where order_id matches
        DB::table('tbl_order')
            ->where('order_id', $orderId)
            ->update(['order_status' => 1]);

        // Fetch all orders including updated one
        $all_order = DB::table('tbl_order')
            ->join('tbl_customers', 'tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
            ->select('tbl_order.*', 'tbl_customers.*')
            ->orderBy('tbl_order.order_id')
            ->get();

        // Paginate the orders
        $order = manageOrderModel::paginate(5);
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
