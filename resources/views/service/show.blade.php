@extends('layouts.app')

@section('content')

<div class="flex flex-col w-3/4 justify-center">
	<div class="bg-gay-300 shadow p-3">
		<h1>Name</h1>{{$service->name}}
	</div>
		<div class="bg-gay-300 p-3">
		<h1>Description</h1>{{$service->description}}
	</div>	
	<div class="bg-gay-300 p-3">
		<h1>Image</h1><img src="{{asset('storage/'.$service->image)}}">
	</div>

	<div>
		                        <a href="{{route('service.edit',$service->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded w-1/2">
                       Edit
                        </a >
	</div>
</div>
@endsection