@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 float-left">
                    <h1 class="text-center font-weight-bold" style="color: red">About <span style="color: #0172BC">Us</span></h1>
                </div>
                <div class="col-md-8 col-sm-12 float-left">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus officia vero ducimus doloremque, debitis dolorem. Commodi impedit mollitia temporibus labore voluptates totam beatae natus cum perferendis vel? Dolore, esse doloremque.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 float-left mb-5">
                    <img src="{{ asset('images/team/user-male-icon.png') }}" alt="ceo" style="height: auto; width: 100%">
                </div>
            </div>
        </div>
    @endsection
