@extends('layouts.user')
@section('content')
<style>
    p {
        text-align: justify;
    }
</style>
    <div class="col-lg-8 p-3 mx-auto">
        <img src="{{ asset('img/solar.JPG') }}" alt="banner" class="w-100">
        <p class="my-2">
            Along with production, our Research & Development (R&D) division which takes advantage of highly 
            experienced specialists in electronics and power sector has proudly been successful in transforming 
            idea to product in the field of “Power Electronics convertors for industrial applications” 
            and design high quality and competitive products, namely:
        </p>
        
        <div class="row my-4 mt-lg-0">
            <div class="col-xl-4 col-lg-5 my-auto">
                <p class="h6 font-weight-bold my-2">
                    On-Grid Solar Inverter
                </p>
                <p class="my-2">
                    Power: 5KW <br>
                    Output voltage: 220V, 50 Hz <br>
                    Input voltage: 160V-350V <br>
                    Quantity of separate MPPT: 2 no’s
                </p>
            </div>
            <div class="col-lg">
                <img src="{{ asset('img/solar1.png') }}" alt="map" style="height: 220px;" class="ml-lg-5 ">
            </div>
        </div>
    
        <div class="row my-4 my-lg-5">
            <div class="col-xl-4 col-lg-5 my-auto">
                <p class="h6 font-weight-bold my-2">
                    Thyristor Rectifier Driver and Controller
                </p>
                <p class="my-2">
                    Power: 80KW <br>
                    Output voltage: 50V <br>
                    Input voltage: 380V, 3 Phase <br>
                    Output current: 1600A
                </p>
            </div>
            <div class="col-lg">
                <img src="{{ asset('img/solar2.jpg') }}" alt="map" style="height: 220px;" class="ml-lg-5 ">
            </div>
        </div>
    
        <div class="row my-4 my-lg-5">
            <div class="col-xl-4 col-lg-5 my-auto">
                <p class="h6 font-weight-bold my-2">
                    690V VFD
                </p>
                <p class="my-2">
                    Power: 75KW – 350KW <br>
                    Output voltage: 690V <br>
                    Efficiency: 95% <br>
                    Output frequency: 10Hz - 300Hz
                </p>
            </div>
            <div class="col-lg">
                <img src="{{ asset('img/solar3.jpg') }}" alt="map" style="height: 220px;" class="ml-lg-5 ">
            </div>
        </div>
        
    </div>

@endsection
