@extends('layouts.admin')

@section('content')

    <!--Container-->
    <div class="container w-full mx-auto pt-1">

        <div class="w-full px-1 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->

<div class="w-full"> 
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Orders</h5>
                                <h3 class="font-bold text-3xl">{{$orders}} <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-orange-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Users</h5>
                                <h3 class="font-bold text-3xl">{{$users}} <span class="text-orange-500"><i class="fas fa-exchange-alt"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">New Users</h5>
                                <h3 class="font-bold text-3xl">{{$newusers}} <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>

                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Services</h5>
                                <h3 class="font-bold text-3xl">{{$services}} </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Vendors</h5>
                                <h3 class="font-bold text-3xl">{{$vendors}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Categories</h5>
                                <h3 class="font-bold text-3xl">7 </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>

            </div>

            <!--Divider-->
            <hr class="border-b-2 border-gray-400 my-8 mx-4">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">Total Orders/Month</h5>
                        </div>
                        <div class="p-5">
                            <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                            <script>
                            new Chart(document.getElementById("chartjs-7"), {
                                "type": "bar",
                                "data": {
                                    "labels": ["January", "February", "March", "April"],
                                    "datasets": [{
                                        "label": "orders",
                                        "data": [10, 20, 30, 40],
                                        "borderColor": "rgb(255, 99, 132)",
                                        "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                    }, {
                                        "label": "Adsense Clicks",
                                        "data": [5, 15, 10, 30],
                                        "type": "line",
                                        "fill": false,
                                        "borderColor": "rgb(54, 162, 235)"
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>

                <div class="w-full md:w-1/2 p-3">
                    <!--Graph Card-->
                    <div class="bg-white border rounded shadow">
                        <div class="border-b p-3">
                            <h5 class="font-bold uppercase text-gray-600">{{ $chart1->options['chart_title'] }}</h5>
                        </div>
                        <div class="p-5">  <h1></h1>
                    {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>




            </div>

            <!--/ Console Content-->

</div>
        </div>


    </div>
    <!--/container-->

    <script type="text/javascript">
        
 {!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
    </script>
@endsection