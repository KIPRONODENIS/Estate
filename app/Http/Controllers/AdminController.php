<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;
use App\Service;
use App\Order;
class AdminController extends Controller
{
    public function index() {
    	return view('admin.admin');
    }
    //get all the services in the platform 

    public function services(Request $request) {
    	        if ($request->ajax()) {
            $data = Service::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
    	
    	return view('admin.services');

    }

      public function users(Request $request) {
    	        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }


        return view('admin.users');
    }

    //GIVE ME THE ORDERS TOTAL ORDERS

          public function orders(Request $request) {
    

          	        if ($request->ajax()) {
              $data =Order::with('to','by','service')->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }


    	return view('admin.orders');
       } 

    //select the vendors
             public function vendors(Request $request) {
    	


          	        if ($request->ajax()) {
             $data=User::whereHas('roles',function($q){return $q->where('role_id','1');})->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.vendors');
    }
}
