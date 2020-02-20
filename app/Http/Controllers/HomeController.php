<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sent=\Auth::user()->sents;
        $rorders=\Auth::user()->rorders;
        $services=\Auth::user()->services;
        return view('home',compact('sent','rorders','services'));
    }
}
