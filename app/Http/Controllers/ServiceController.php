<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service)
    {
      $users=$service->users;
       return view('services',compact('users','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $data= $request->validate([
     'service'=>'required|min:3|max:60',
     'description'=>'required|min:20|max:300',
     'image'=>'required'
       ]);


       //IF GOES THROUGH
       $path=$request->file('image')->store('public');
$service=new Service([
'name'=>$request->service,
'description'=>$request->description,
'image'=>$path
]
);
       
       //save to

$save=\Auth::user()->services()->save($service,['details'=>$request->description]);


session()->flash("success","Service Created successfully");


return redirect()->route('service.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
'service'=>'required|min:3|max:60',
'description'=>'required|min:10:max:120'
        ]);

if($request->hasFile('image')) {
    $image=$request->file('image')->store('public');
}

//udate a service

$updated=$service->update(['name'=>$request->service,'description'=>$request->description,'image'=>$image ?? $service->image]);

session()->flash('success',"successfully updated service");

return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        session()->flash('deleted_service',"Service record  was deleted");

        return redirect()->back();
    }
}
