<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class Manage_orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.Customer_id', '=', 'tbl_customers.Customer_id')
        ->select('tbl_order.*', 'tbl_customers.Customer_name')
        ->orderby('tbl_order.order_id')->get();
        return view('Admin.manage_order.manageOrder',compact('all_order'));
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
        ->join('tbl_Shipping', 'tbl_order.Shipping_id', '=', 'tbl_Shipping.Shipping_id')
        ->join('tbl_order_detail', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
        ->select('tbl_order.*', 'tbl_customers.*', 'tbl_Shipping.*', 'tbl_order_detail.*')
        ->where('tbl_order.order_id', $order_id)
        ->first();

    return view('Admin.manage_order.detailManage', compact('order_byID'));
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
