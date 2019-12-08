<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Services\ReportServices;

class ReportController extends Controller
{
    public function formSubmit(Request $request)
    {
    	$type = $request->type;
    	$from = $request->from;
    	$to = $request->to;
        $category = $request->category;
        $duration = $request->duration;




    	if ($type == 'order') {
            if (empty($from)) {
                $from = ReportServices::dateformat($duration);
                $to = date("Y-m-d");
            }

    		$orders = Order::whereBetween('created_at', [$from, $to])->get();
            return response()->json($orders);
        }


   
    }


}
