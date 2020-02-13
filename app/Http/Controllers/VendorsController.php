<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class VendorsController extends Controller
{
    public function index() {
    	$services=Service::with('users')->get();

    	dd($services);
    }
}
