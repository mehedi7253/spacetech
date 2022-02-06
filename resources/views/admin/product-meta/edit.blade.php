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
            <h5 class="text-primary">Add product Data <a class="btn btn-info float-right" href="{{ route('products.index') }}">All Product</a></h5>
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
            <form action="{{ route('productmetas.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6 float-left">
                    <label>Title: <sup class="text-danger">*</sup></label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $product->title }}" placeholder="Enter Title" autocomplete="title" autofocus>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Prodcut Image: </label>
                    <input id="image_one" type="file" class="form-control @error('image_one') is-invalid @enderror" name="image_one" value="{{ old('image_one') }}">
                    @error('image_one')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Prodcut Image: </label>
                    <input id="image_two" type="file" class="form-control @error('image_two') is-invalid @enderror" name="image_two" value="{{ old('image_two') }}">
                    @error('image_two')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Prodcut Image: </label>
                    <input id="image_three" type="file" class="form-control @error('image_three') is-invalid @enderror" name="image_three" value="{{ old('image_three') }}">
                    @error('image_three')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-4 float-left">
                    <img src="{{ asset('images/product/images/'.$product->image_one) }}" style="height: 120px; width: 120px">
                 </div>
                 <div class="form-group col-md-4 float-left">
                    <img src="{{ asset('images/product/images/'.$product->image_two) }}" style="height: 120px; width: 120px">
                 </div>
                 <div class="form-group col-md-4 float-left">
                    <img src="{{ asset('images/product/images/'.$product->image_three) }}" style="height: 120px; width: 120px">
                 </div>

                <div class="form-group col-md-12 float-left">
                    <label>Description: <sup class="text-danger">*</sup></label>
                    <textarea id="application"  name="description" class="form-control @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>

                <div class="form-group col-md-6 float-left">
                    <label></label>
                    <input type="submit" name="btn" class="btn btn-success col-md-5 btn-block" value="Submit">
                </div>
            </form>
        </div>
      </div>

    @endsection
