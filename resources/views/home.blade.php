@extends('layouts.app')

@section('content')
    <div class=" items-center mx-5 justify-between mt-5">

        <div class="md:w-3/4 md:mx-2 w-3/4 mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                  Sent Order Requests
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">Ordered From</th>
      <th class="px-4 py-2">Service Name</th>
      <th class="px-4 py-2">Estate</th>
      <th class="px-4 py-2">Delivery Date</th>
      <th class="px-4 py-2">Created At</th>
    </tr>
  </thead>
  <tbody>
    @if($sent->count()>0)
    @foreach($sent as $item)
       <tr>
      <td class="px-4 py-2">{{$item->to->name}}</td>
      <td class="px-4 py-2">{{$item->service->name}}</td>
      <td class="px-4 py-2">{{$item->estate}}</td>
      <td class="px-4 py-2">{{$item->date}}</td>
      <td class="px-4 py-2">{{$item->created_at}}</td>
    </tr>
    @endforeach

    @else 
    <tr>
      <td colspan="4">There are no sent request</td>
    </tr>
@endif
  </tbody>
</table>
                     
                       
                    </p>
                </div>
            </div>
        </div>

      @role('Vendor') 
                <div class="md:w-full md:mx-2 my-5 mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                  Recieved Requests
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <table class="table-auto w-full">
  <thead>
    <tr>
      <th class="px-4 py-2">Ordered By</th>
      <th class="px-4 py-2">phone</th>
      <th class="px-4 py-2">Delivery Date</th>
       <th class="px-4 py-2">Estate</th>
       <th class="px-4 py-2">Status</th>
       <th class="px-4 py-2">Created at</th>
       <th>Action</th>
    </tr>
  </thead>
  <tbody>
@if($rorders->count()>0)
@foreach($rorders as $order)
        <tr>
      <td class="px-4 py-2">{{$order->by->name}}</td>
      <td class="px-4 py-2">{{$order->by->email}}</td>
      <td class="px-4 py-2">{{$order->date}}</td>
       <td class="px-4 py-2">{{$order->estate}}</td>
       <td class="px-4 py-2">{{"pending"}}</td>
       <td class="px-4 py-2">{{$order->created_at}}</td>
            <td class="border px-4 py-2 flex justify-between"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">view</a>
        <a class="bg-green-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Edit</a>
        <a class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Delete</a>
      </td>
    </tr>
  @endforeach
    @else 
    <tr colspan="5">There are no sent orders</tr>
@endif

  </tbody>
</table>
                 

            
                      
                       
                    </p>
                </div>
            </div>
        </div>

 @endrole


                     
                       

    </div>

 @role('Vendor') 

    <div class="flex items-center mx-5 justify-between mt-5">

        <div class="md:w-full md:mx-2">


            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                 My Services <a href="/create/service" class="bg-blue-500 text-white hover:bg-gray-100 hover:text-blue-500 font-semibold py-2 px-4 border border-gray-400 rounded shadow float-right">
Add Service
</a>
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <table class="table-auto w-full">
  <thead>
    <tr>
      <th class="px-4 py-2">Service Name</th>
      <th class="px-4 py-2">Details</th>
      <th class="px-4 py-2">Orders</th>

      <th class="px-4 py-2">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($services->count()>0)
    @foreach($services as $service)
    <tr>
      <td class="border px-4 py-2">{{$service->name}}</td>
      <td class="border px-4 py-2">{{\Str::limit($service->pivot->details,15,"...")}}</td>
      <td class="border px-4 py-2">{{$service->orders->count()}}</td>
      <td class="border px-4 py-2"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">view</a>
        <a class="bg-green-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Edit</a>
        <a class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">Delete</a>
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
                       
                    </p>
                </div>
            </div>
        </div>
</div>
 @endrole
@endsection
