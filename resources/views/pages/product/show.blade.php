@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                @foreach ($product_desc as $products)
                    <div class="col-md-8 col-sm-12 mt-5 mb-5 float-left">
                        <div class="card mt-4" style="border: 2px solid blue; border-radius: 10px">
                            <div class="card-body">
                                <div class="col-md-4 col-sm-12 float-left">
                                    <img src="{{ asset('images/technology/Asset 1.png') }}" style="height: 150px;">
                                    <h5 class="mt-4 text-center">Model No</h5>
                                </div>
                                <div class="col-md-8 col-sm-12 float-left">
                                    <div class="table-responsive">
                                        <table class="table tab-pane table-striped table-hover">
                                            <tr>
                                                <th>Celling</th>
                                                <td>ksjdbfkjsbdfs</td>
                                            </tr>
                                            <tr>
                                                <th>Color Door</th>
                                                <td>ksjdbfkjsbdfs</td>
                                            </tr>
                                            <tr>
                                                <th>Car Wall</th>
                                                <td>ksjdbfkjsbdfs</td>
                                            </tr>
                                            <tr>
                                                <th>Handril</th>
                                                <td>ksjdbfkjsbdfs</td>
                                            </tr>
                                            <tr>
                                                <th>Floor</th>
                                                <td>ksjdbfkjsbdfs</td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-md-4 col-sm-12 float-left mt-5 mb-5">
                    <div class="card mt-4" style="border: 2px solid red; border-radius: 10px">
                        <div class="card-body">
                            <h3 class="font-weight-bold">Our Products</h3>
                            <div class="">
                                <a href=""><li class="fa fa-arrow-circle-right" style="color: #0172BC"> Name</li></a><br/>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
