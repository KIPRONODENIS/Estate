@extends('layouts.app')
@section('content')
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="margin-top:10px">
    <source src="/vedios/particle.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
     <div class="flex items-center justify-center" style="height: 450px;bac">

        <div class="flex flex-col justify-around h-1/2">
            <div>
                <h1 class="text-white text-center font-light tracking-wider text-5xl mb-6">
                   Find The Vendor You are Looking For 
                </h1>
                <ul class="list-reset d-flex">
                    <li class="inline pr-8">
                     <select class="custom-select my-1 mr-sm-2 border-none shadow-sm py-3 rounded px-2 bg-teal-300 text-white w-2/5">
                         <option class="bg-blue-300">Electrical repair</option>
                         <option>Gardening</option>
                         <option>Baby Care nunies</option>
                         <option>Security</option>
                         <option>Water suppliers</option>
                         <option>Transport Services</option>
                     </select>
                    </li>
                    <li class="inline pr-8">
                         <select class=" my-1 mr-sm-2 border-none shadow-sm py-3 rounded px-2 bg-teal-300 text-blue">
                         <option>Meru</option>
                         <option>Makutano</option>
                         <option>Embu</option>
                         <option>MAUA</option>

                     </select>
                    </li>
                    <li class="inline pr-8">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded w-1/4">
                       Search
                        </button>
                    </li>
                  
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
  </div>
</header>
<div class="container my-4">
<h1 class=" mt-4 text-blue-400 text-center font-light tracking-wider text-5xl mb-6">
The services You Will Get 
</h1>

<div class="flex flex-wrap mx-4 ml-10">
    @foreach($services as $service)
    <div class="w-full max-w-sm p-8 animated fadeIn">
        <div class="p-2">
            <div class="border shadow">
                <div class="w-full relative"><img  src="{{asset('storage/'.$service->image)}}" alt="">

                </div>
                <div class="border-t-4 -mt-1 border-green w-full flex flex-wrap justify-center pb-8 bg-green-lightest">
                    <h3 class="w-full p-4 text-center text-grey-darkest text-md">{{$service->name}}</h3>
                    <div class="border-b-2 border-teal-800 w-24"></div>
                    <p class="p-4 text-center text-grey-dark">{{$service->description}}</p>
                    <a  href="/service/{{$service->id}}" class="px-6 py-4 text-white bg-blue-900 rounded">Find</a>
                </div>
            </div>
        </div>
    </div>    
  @endforeach

     

</div>
@endsection
