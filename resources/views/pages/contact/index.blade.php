@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto mt-5 mb-5" >
                    <div class="card" style="border: 2px solid #0172BC">
                        <div class="card-header">
                            <h3 class="text-center font-weight-bold">Contact US</h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-5 col-sm-12 float-left">
                                <h5 class="text-danger font-weight-bold"><i class="fa fa-building text-dark"></i> SpaceTech Elevator & Escalator</h5>

                                <i class="fa fa-map-marker text-danger"></i> 464/C, Khilgaon, Dhaka-1219, Bangladesh <br/>
                                <i class="fa fa-phone text-danger"></i> +080 1730711050<br/>
                                <i class="fa fa-envelope text-danger"></i> spacetechelevators@gmail.com<br/>

                                <div class="google-map mt-4">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.740155431343!2d90.46220191429705!3d23.756643794456206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b725ab094d37%3A0x8602418d28bfc1e1!2sSpacetech%20Elevators%20Limited!5e0!3m2!1sen!2sbd!4v1643888911727!5m2!1sen!2sbd" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 float-left">
                                @if (session('success'))
                                    <div class="col-sm-12">
                                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                    </div>
                                @endif
                                <form class="mt-3 mb-4" action="{{ route('contact-store') }}" method="POST">
                                    @csrf
                                    <div class="form-group col-md-6 col-sm-12 float-left">
                                        <label>Name: <sup class="text-danger font-weight-bold">*</sup></label>
                                        <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                             <label style="color: red">{{ $message }}</label>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 float-left">
                                        <label>Phone Number: <sup class="text-danger font-weight-bold">*</sup></label>
                                        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" autofocus>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                             <label style="color: red">{{ $message }}</label>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 float-left">
                                        <label>Email: <sup class="text-danger font-weight-bold">*</sup></label>
                                        <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                             <label style="color: red">{{ $message }}</label>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 float-left">
                                        <label>Message: <sup class="text-danger font-weight-bold">*</sup></label>
                                        <textarea name="message" id="message" placeholder="Enter Your Message here" class="form-control @error('message') is-invalid @enderror" value="{{ old('message') }}" autofocus></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                             <label style="color: red">{{ $message }}</label>
                                         </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 float-left">
                                        <input type="submit" name="btn" class="btn btn-success btn btn-block" value="Send">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

    @endsection
