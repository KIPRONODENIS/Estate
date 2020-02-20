<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;
use App\Service;
use App\Order;
use Carbon\Carbon;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
class AdminController extends Controller
{
    public function index() {
    	//new users
    	$newusers=User::latest()->where('created_at','>',new Carbon('today'))->get()->count();
        //orders
        $orders=Order::all()->count();
        //all services
        $services=Service::all()->count();
        //vendors
        $vendors=User::whereHas('services')->count();
        //users
        $users=User::all()->count();


        //now the chart
        $chart_options = [
    'chart_title' => 'Users by months',
    'report_type' => 'group_by_date',
    'model' => 'App\User',
    'group_by_field' => 'created_at',
    'group_by_period' => 'month',
    'chart_type' => 'bar',
];
$chart1 = new LaravelChart($chart_options);





    	return view('admin.admin',compact('newusers','orders','services','vendors','users','chart1'));
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
