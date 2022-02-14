@extends('pages.layouts.app')
    @section('content')

    <section style="background-color: #466597;">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-12 float-left mt-5"></div>
                <div class="col-md-5 col-sm-12 float-left mt-5">
                    <p class="text-center">
                        <img src="{{ asset('images/product/images/cargo/1.PNG') }}" style="height: 300px">
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 float-left mt-5">
                    <p class="text-white text-justify" style="font-size: 17px">
                        SPACETECH mainly used in industrial plans, warehouse and otehr goods transfer occasion. Provide our customers with efficient and convenient lifting and transporation solutions. Easy operate, safty and reliability, highquality and low energy consumption.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #FFFFFF">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <img src="{{ asset('images/product/images/cargo/Asset 2-8.png') }}" style="width: 100%">
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #FFFFFF">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto mt-5 mb-5">
                    <img src="{{ asset('images/product/images/cargo/3.PNG') }}">
                </div>
            </div>
        </div>
    </section>
    @endsection
