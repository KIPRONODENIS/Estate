<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class RequestController extends Controller
{
    public function show(Order $order) {
    	return view('Requests.show',compact('order'));
    }

       public function edit(Order $order) {
    	return view('Requests.edit',compact('order'));
    }

    public function store(Order $order) {
    	$updated=$order->update(['status'=>request()->status]);

session()->flash('updated',"Successfully Updated");

    	return redirect()->back();

    	    }



}
