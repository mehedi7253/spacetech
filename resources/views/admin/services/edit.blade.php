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
            <h5 class="text-primary">Add Service <a class="btn btn-info float-right" href="{{ route('services.index') }}">All Services</a></h5>
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
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Service Name: <sup class="text-danger">*</sup></label>
                    <input type="text" name="service_name" id="service_name" class="form-control @error('service_name') is-invalid @enderror" value="{{ $service->service_name }}" placeholder="Enter Service Name" autocomplete="service_name" autofocus>
                    @error('service_name')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>URL: <sup class="text-danger">*</sup></label>
                    <input id="url"  disabled type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $service->url }}" placeholder="Enter URL" autocomplete="url" autofocus>
                    @error('url')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Service Image: <sup class="text-danger">*</sup></label>
                    <input id="service_image" type="file" class="form-control @error('service_image') is-invalid @enderror" name="service_image" value="{{ old('service_image') }}">
                    @error('service_image')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                    <br/>
                    <img src="{{ asset('images/service/images/'.$service->service_image) }}" style="height: 120px; width: 120px"><br/>

                </div>
                <div class="form-group">
                    <label></label>
                    <input type="submit" name="btn" class="btn btn-success col-md-5 btn-block" value="Update">
                </div>
            </form>
        </div>
      </div>
    @endsection
