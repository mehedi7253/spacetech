@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mt-5 mb-5 float-left">
                    <div class="card mt-4" style="border: 2px solid blue; border-radius: 10px">
                        <div class="card-body">
                            <div class="col-md-9 col-sm-12 float-left">
                                <h1>name</h1>
                                <p class="text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quo dolor, totam assumenda at aliquid possimus modi praesentium quam tempore, suscipit eveniet labore nisi necessitatibus dolores ullam nulla vitae ipsum.
                                </p>
                            </div>
                            <div class="col-md-3 col-sm-12 float-left">
                                <img src="{{ asset('images/technology/Asset 1.png') }}" style="height: 150px;">
                            </div>

                        </div>
                    </div>

                    <div class="card mt-3" style="border: 2px solid red; border-radius: 10px">
                        <div class="card-body">
                            <div class="col-md-3 col-sm-12 float-left">
                                <img src="{{ asset('images/technology/Asset 1.png') }}" style="height: 150px;">
                            </div>
                            <div class="col-md-9 col-sm-12 float-left">
                                <h1>name</h1>
                                <p class="text-justify">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quo dolor, totam assumenda at aliquid possimus modi praesentium quam tempore, suscipit eveniet labore nisi necessitatibus dolores ullam nulla vitae ipsum.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-4 col-sm-12 float-left mt-5 mb-5">
                    <div class="card mt-4" style="border: 2px solid red; border-radius: 10px">
                        <div class="card-body">
                            <h3 class="font-weight-bold">Technology We Used</h3>
                            <div class="">
                                <a href=""><li class="fa fa-arrow-circle-right" style="color: #0172BC"> Name</li></a><br/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
