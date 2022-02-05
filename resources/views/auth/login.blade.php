@extends('pages.layouts.app')
    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5 mb-5">
                    <div class="card">
                        <div class="card-header" style="background-color: #0172BC">
                            <h3 class="text-capitalize text-center text-white">Admin Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Email: <sup class="text-danger font-weight-bold">*</sup></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password: <sup class="text-danger font-weight-bold">*</sup></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btn" class="btn btn-success col-md-6" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
