@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 mt-5 mb-5 float-left">
                    <div class="card mt-4" style="border: 2px solid #0172BC; border-radius: 10px">
                        <div class="card-header" style="background-color: #0172BC">
                            <h3 class="text-center text-white">Product Name</h3>
                        </div>
                        <div class="card-body text-center">
                           <p class="text-center">
                             <img src="{{ asset('images/technology/Asset 1.png') }}" style="height: 150px" title="product name">
                           </p>

                           <a href="{{ url('products/show') }}" class="col-md-6 btn text-center mt-4" style="background-color: #0172BC;border-radius: 10px;color: white;">View More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
