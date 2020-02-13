@extends('layouts.app')

@section('content')
    <div class="flex items-center mx-5 justify-between mt-5">

        <div class="md:w-1/2 md:mx-2">

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
      <th class="px-4 py-2">Title</th>
      <th class="px-4 py-2">Author</th>
      <th class="px-4 py-2">Views</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">Intro to CSS</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">858</td>
    </tr>
    <tr class="bg-gray-100">
      <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">112</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">Intro to JavaScript</td>
      <td class="border px-4 py-2">Chris</td>
      <td class="border px-4 py-2">1,280</td>
    </tr>
  </tbody>
</table>
                       @role('Vendor') 

                    <div>You are a vendor </div>
                       @endrole
                       
                    </p>
                </div>
            </div>
        </div>


                <div class="md:w-1/2 md:mx-2">

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
                        <table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">Title</th>
      <th class="px-4 py-2">Author</th>
      <th class="px-4 py-2">Views</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">Intro to CSS</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">858</td>
    </tr>
    <tr class="bg-gray-100">
      <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">112</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">Intro to JavaScript</td>
      <td class="border px-4 py-2">Chris</td>
      <td class="border px-4 py-2">1,280</td>
    </tr>
  </tbody>
</table>
                       @role('Vendor') 

                    <div>You are a vendor </div>
                       @endrole
                       
                    </p>
                </div>
            </div>
        </div>




                     
                       

    </div>

 @role('Vendor') 

    <div class="flex items-center mx-5 justify-between mt-5">

        <div class="md:w-1/2 md:mx-2">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                 My Services <button class="bg-blue-500 text-white hover:bg-gray-100 hover:text-blue-500 font-semibold py-2 px-4 border border-gray-400 rounded shadow float-right">
Add Service
</button>
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        <table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">Title</th>
      <th class="px-4 py-2">Author</th>
      <th class="px-4 py-2">Views</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">Intro to CSS</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">858</td>
    </tr>
    <tr class="bg-gray-100">
      <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">112</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">Intro to JavaScript</td>
      <td class="border px-4 py-2">Chris</td>
      <td class="border px-4 py-2">1,280</td>
    </tr>
  </tbody>
</table>
                       @role('Vendor') 

                    <div>You are a vendor </div>
                       @endrole
                       
                    </p>
                </div>
            </div>
        </div>
</div>
 @endrole
@endsection
