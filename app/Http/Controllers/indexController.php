<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class indexController extends Controller
{
   public function index(){
    $services=Service::inRandomOrder()->get()->take(6);

   	return view('welcome',compact('services'));
   }
}
