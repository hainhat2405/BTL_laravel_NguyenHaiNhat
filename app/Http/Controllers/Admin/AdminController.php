<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\StatisticalModel;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function filter_by_date(Request $request){
        $data = $request->all();
    
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];
    
        $get = StatisticalModel::whereBetween('order_date',[$from_date,$to_date])->orderBy('order_date','ASC')->get();
        foreach($get as $key => $val){
            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity,
            ); 
        }
        echo $data = json_encode($chart_data);
        // return response()->json($chart_data); // Trả về dữ liệu JSON
    }

    public function dashboard_filter(Request $request){
        $data = $request->all();
        
        // $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        $dau_thangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    
        if ($data['dashboard_value'] == '7ngay') {
            $get = StatisticalModel::whereBetween('order_date', [$sub7days, $now])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thangtruoc') {
            $get = StatisticalModel::whereBetween('order_date', [$dau_thangtruoc, $cuoi_thangtruoc])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thangnay') {
            $get = StatisticalModel::whereBetween('order_date', [$dau_thangnay, $now])->orderBy('order_date', 'ASC')->get();
        } else {
            $get = StatisticalModel::whereBetween('order_date', [$sub365days, $now])->orderBy('order_date', 'ASC')->get();
        }
        
        foreach($get as $key => $val){
            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity,
            ); 
        }
        echo $data = json_encode($chart_data);
    }

    public function days_order(){
        $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $get = StatisticalModel::whereBetween('order_date', [$sub30days, $now])->orderBy('order_date', 'ASC')->get();
        foreach($get as $key => $val){
            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity,
            ); 
        }
        echo $data = json_encode($chart_data);
    }
    
}
