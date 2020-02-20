@extends('layouts.app')
@section('content')
<form class="card w-1/2 mx-auto block" method="POST" action="{{route('status.update',$order->id)}}">
	@csrf
	         <div class="px-4 py-5 my-3 bg-white shadow  line-height-20">
         	<h1 class="text-2xl text-gray-800">Update Order Status</h1>
         </div>
	       <div class="px-4 py-5 my-5 bg-white shadow  line-height-20">
	       	<select name="status" class="border-b border-2 border-blue-100 w-full h-10 bg-gray-300">
	       		<option >Pending</option>
	       		<option>Intransit</option>
	       		<option>Deliverd</option>
	       	</select>
	       </div>

         <div class="px-4 py-5 my-3 bg-white shadow  line-height-20">
         	<button type="submit" class="bg-green-500 text-white px-4 py-3 w-1/2 rounded shadow outline-none">Update Status</button>
         </div>

         @if(session()->has('updated'))
        <div class="px-4 py-5 my-3 bg-green-200 shadow  line-height-20">
         	{{session('updated')}}
         </div>

         @endif
</form>
@endsection