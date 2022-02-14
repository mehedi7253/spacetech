@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                @foreach ($design as $designs)
                    <div class="col-md-4 col-sm-12 float-left mt-5 mb-5" >
                        <div class="card" style="border: 2px solid red; border-radius: 10px">
                            <p class="text-center">
                                <img src="{{ asset('images/subdesign/images/'.$designs->image) }}" style="height: 200px;">
                            </p>
                            <div class="card-body">
                                <label class="font-weight-bold">Model No: {{ $designs->model_no }}</label><br/>
                                <p class="text-justify"> {{ $designs->description }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @endsection
