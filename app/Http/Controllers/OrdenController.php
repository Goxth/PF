<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Orden;

class OrdenController extends Controller
{
    public function ordens($type='')
    {
    if($type=='pendientes'){
       $ordens=Orden::where('delivered','0')->get();
    }elseif ($type='delivered'){
       $ordens=Orden::where('delivered','1')->get();
    }else{
       $order=Orden::all();
       }
       return view('admin.ordens',compact('ordens'));
    }
    
    public function toggledeliver(Request $request,$orderId)
    {
    	$order=Orden::find($orderId);
    	if($request->has('entregados')){
        
        Mail::to($order->user)->send(new OrderShipped());

        $order->delivered=$request->delivered;  

    	}else{
    		$order->delivered="0";
    	}
    	
    	$order->save();

    	return back();
    }

}


