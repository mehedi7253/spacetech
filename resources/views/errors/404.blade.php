@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto mt-5 mb-5">
                    <div class="card mt-4 mb-4" style="border: 2px solid #FF0202; border-radius: 10px">
                        <div class="card-body text-center">
                            <h1 class="text-danger font-weight-bold">404</h1>
                            <h2 class="text-danger font-weight-bold">Page Not Found</h2>
                            <p class="text-capitalize">We are sorry, the page you request could not be found. please go back to the home page</p>
                            <a class="btn btn-primary" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
