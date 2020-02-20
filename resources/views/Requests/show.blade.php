@extends('layouts.app')
@section('content')
<div class="card w-1/2 mx-auto block">
	<div>
	      <div class="px-4 py-5 my-3 bg-white shadow  line-height-20"><strong>Ordered By</strong>{{$order->by->name}}</div>
      <div class="px-4 py-5 my-3 bg-white shadow  line-height-20"><strong>Email:</strong>{{$order->by->email}}</div>
  </div>
  <div>
      <div class="px-4 py-5 my-3 bg-white shadow  line-height-20"><strong>DELIVERY DATE:</strong>{{$order->date}}</div>
       <div class="px-4 py-5 my-3 bg-white shadow  line-height-20"><strong>Estate:</strong>{{$order->estate}}</div>
   </div>
   <div>
       <div class="px-4 py-5 my-3 bg-white shadow  line-height-20"><strong>Status:</strong>{{"pending"}}</div>
       <div class="px-4 py-5 my-3 bg-white shadow  line-height-20"><strong>Date Placed</strong>{{$order->created_at}}</div>

         <div class="px-4 py-5 my-3 bg-white shadow  line-height-20">
         	<a  href="{{route('request.edit',$order->id)}}" class="bg-green-500 text-white px-4 py-3 w-1/2 rounded shadow outline-none">Update Status</a>
         </div>
       
   </div>
</div>
@endsection