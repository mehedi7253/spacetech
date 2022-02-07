@extends('admin.layouts.app')
    @section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $page_name }}</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active" aria-current="page">{{ $page_name }}</li>
        </ol>
      </div>

      <div class="card">
        <div class="card-header">
            <h5 class="text-primary">Add Member <a class="btn btn-info float-right" href="{{ route('team.index') }}">All Members</a></h5>
            <hr/>
        </div>
        <div class="card-body">
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
            <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> Name: <sup class="text-danger">*</sup></label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Name" autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Designation: <sup class="text-danger">*</sup></label>
                    <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" placeholder="Enter Designation" autocomplete="designation" autofocus>
                    @error('designation')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image: <sup class="text-danger">*</sup></label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label></label>
                    <input type="submit" name="btn" class="btn btn-success col-md-5 btn-block" value="Submit">
                </div>
            </form>
        </div>
      </div>
    @endsection
