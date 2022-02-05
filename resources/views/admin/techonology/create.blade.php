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
            <h5 class="text-primary">Add product <a class="btn btn-info float-right" href="{{ route('products.index') }}">All Product</a></h5>
            <hr/>
        </div>
        <div class="card-body">
            <form action="{{ route('technologies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Technology Name: <sup class="text-danger">*</sup></label>
                    <input id="tech_name" type="text" class="form-control @error('tech_name') is-invalid @enderror" name="tech_name" value="{{ old('tech_name') }}" placeholder="Enter Technology Name" autocomplete="tech_name" autofocus>
                    @error('tech_name')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>URL: <sup class="text-danger">*</sup></label>
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" placeholder="Enter URL" autocomplete="url" autofocus>
                    @error('url')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Prodcut Image: <sup class="text-danger">*</sup></label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Prodcut Image: <sup class="text-danger">*</sup></label>
                    <textarea name="description" class="form-control"></textarea>
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
