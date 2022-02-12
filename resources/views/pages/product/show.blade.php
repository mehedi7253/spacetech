@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 col-sm-12 mt-5 mb-5 float-left">
                        <div class="card" style="border: 2px solid red; border-radius: 10px">
                            <div class="card-header bg-danger">
                                <h6 class="text-white text-center">Model No: {{ $product->model_no }}</h6>
                            </div>
                            <div class="card-body">
                                <p class="text-center">
                                    <img src="{{ asset('images/product/images/'.$product->image) }}" style="height: 200px; width: 100%">
                                </p>
                                <div class="table-responsive">
                                    <table class="table tab-pane table-bordered table-hover" style="border: 2px solid #0172BC;">
                                        <tr>
                                            <th>Celling</th>
                                            <td>{{ $product->colum_one }}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Door</th>
                                            <td>{{ $product->colum_tow }}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Wall</th>
                                            <td>{{ $product->colum_three }}</td>
                                        </tr>
                                        <tr>
                                            <th>Handrail</th>
                                            <td>{{ $product->colum_four }}</td>
                                        </tr>
                                        <tr>
                                            <th>Floor</th>
                                            <td>{{ $product->colum_five }}</td>
                                        </tr>
                                        @if ($product->colum_five !== NULL)
                                            <tr>
                                                <th>Celling</th>
                                                <td>{{ $product->colum_five }}</td>
                                            </tr>
                                        @endif
                                        @if ($product->colum_six !== NULL)
                                        <tr>
                                            <th>Celling</th>
                                            <td>{{ $product->colum_six }}</td>
                                        </tr>
                                    @endif

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
