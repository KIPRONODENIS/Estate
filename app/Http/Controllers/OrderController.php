<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
class OrderController extends Controller
{
    public function show(User $user,Service $service){
 
    	return view('service.index',compact('user','service'));
    }
}
