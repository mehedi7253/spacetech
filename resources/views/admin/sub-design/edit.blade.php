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
            <h5 class="text-primary">Add Sub Design <a class="btn btn-info float-right" href="{{ route('designs.index') }}">All Designs  </a></h5>
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
            <form action="{{ route('sub-designs.update',$subdesigns->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Model Number: <sup class="text-danger">*</sup></label>
                    <input id="model_no" type="text" class="form-control @error('model_no') is-invalid @enderror" name="model_no" value="{{ $subdesigns->model_no }}" placeholder="Enter Model Number" autocomplete="model_no" autofocus>
                    @error('model_no')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description: <sup class="text-danger">*</sup></label>
                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  placeholder="Enter Description">{{ $subdesigns->description }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Design Image: <sup class="text-danger">*</sup></label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                    <br/>
                    <img src="{{ asset('images/subdesign/images/'. $subdesigns->image) }}" style="height: 120px; width: 120px"><br/>

                </div>
                <div class="form-group col-md-6 float-left">
                    <label></label>
                    <input type="submit" name="btn" class="btn btn-success col-md-5 btn-block" value="Submit">
                </div>
            </form>
        </div>
      </div>
    @endsection
