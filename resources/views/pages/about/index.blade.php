@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 float-left">
                    <h1 class="text-center font-weight-bold mt-5 mb-5" style="color: red">About <span style="color: #0172BC">Us</span></h1>
                </div>
                <div class="col-md-8 col-sm-12 float-left">
                    <p class="text-justify">
                        SPACETECH ELEVATORS being one of the reputable global leaders in elevator & escalator industry has successfully introduced the concept of combining advanced lift technology from Europe with Standard & Luxury design elements, achieving a high standard performance at a competitive price. As per quality SPACE TECH works absolutely like Brand Elevator.
                        <br/><br/>
                        World class elevator component technologies employed by SPACETECH over the years have proven their compatibility, in particular with regards to size, speed, power efficiency, proper installation and noiseless performance. With safety features second to none in the industry, these technical liaisons have put SPACETECH in position to offer local developers and architects new elevator design such as the "Gear-Less Concept". which allows a better utilization of commercial building space and thus better return on investment.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 float-left mb-5">
                    <img src="{{ asset('images/team/user-male-icon.png') }}" alt="ceo" style="height: auto; width: 100%">
                </div>
            </div>
        </div>
    @endsection
