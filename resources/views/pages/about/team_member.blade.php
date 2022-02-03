@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 float-left mt-5">
                    <h1 class="text-center font-weight-bold" style="color: red">Our <span style="color: #0172BC">Team</span></h1>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="card mt-5 mb-5" style="border: 2px solid #0172BC; border-radius: 10px">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/team/user-male-icon.png') }}" class="ceo_image">
                            <h3 class="mt-4">CEO Name</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 float-left">
                    <div class="card mt-5 mb-5" style="border: 2px solid red; border-radius: 10px">
                        <div class="card-body text-center">
                            <img src="{{ asset('images/team/icon-5359553_1280.png') }}" class="member_image">
                            <h3 class="mt-4">Member Name</h3>
                            <p>Desgnation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
