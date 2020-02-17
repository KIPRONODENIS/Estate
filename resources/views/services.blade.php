@extends('layouts.app')

@section('content')
<div class="flex flex-wrap  mx-5 ml-10  justify-around">


@foreach($users as $user)
                <div class="bg-white shadow-xl rounded-lg overflow-hidden m-3 mx-4 justify-between" style="width:300px">
                    <div class="bg-cover bg-center h-56 p-4" style="background-image: url(https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80)">
                        <div class="flex justify-end">
                            <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="uppercase tracking-wide text-sm font-bold text-gray-700 my-3">{{$service->name}}</p>
                      
                        <p class="text-gray-700 w-3/4">{{$user->pivot->details}}</p>
                    </div>
                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="w-full">
                      <a href="/user/{{$user->id}}/service/{{$service->id}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow float-right">
Order
                   </a>
                        </div>

                    </div>
                    <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">{{$user->location->name ?? "Nairobi"}}</div>
                        <div class="flex items-center pt-2">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
                            </div>
                            <div>
                                <p class="font-bold text-gray-900">{{$user->name}}</p>
                                <p class="text-sm text-gray-700">{{$user->phone}}</p>
                            </div>
                        </div>
                    </div>
                </div>


@endforeach




     

</div>

@endsection