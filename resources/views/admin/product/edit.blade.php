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
            <h5 class="text-primary">Add Product <a class="btn btn-info float-right" href="{{ route('products.index') }}">All Products     </a></h5>
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
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6 float-left">
                    <label>Service Name: <sup class="text-danger">*</sup></label>
                    <input disabled  class="form-control" value="{{ $product->serviceProduct->service_name }}">
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Model Number: <sup class="text-danger">*</sup></label>
                    <input id="model_no" type="text" class="form-control @error('model_no') is-invalid @enderror" name="model_no" value="{{ $product->model_no }}" placeholder="Enter Model Number" autocomplete="model_no" autofocus>
                    @error('model_no')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Colum One: <sup class="text-danger">*</sup></label>
                    <input id="colum_one" type="text" class="form-control @error('colum_one') is-invalid @enderror" name="colum_one" value="{{ $product->colum_one }}" placeholder="Enter Column Data One" autocomplete="colum_one" autofocus>
                    @error('colum_one')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Colum Two: <sup class="text-danger">*</sup></label>
                    <input id="colum_tow" type="text" class="form-control @error('colum_tow') is-invalid @enderror" name="colum_tow" value="{{ $product->colum_tow }}" placeholder="Enter Column Data Two" autocomplete="colum_tow" autofocus>
                    @error('colum_tow')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Colum Three: <sup class="text-danger">*</sup></label>
                    <input id="colum_three" type="text" class="form-control @error('colum_three') is-invalid @enderror" name="colum_three" value="{{ $product->colum_three }}" placeholder="Enter Column Data Three" autocomplete="colum_three" autofocus>
                    @error('colum_three')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Colum Four:</label>
                    <input id="colum_four" type="text" class="form-control @error('colum_four') is-invalid @enderror" name="colum_four" value="{{ $product->colum_four }}" placeholder="Enter Column Data Four" autocomplete="colum_four" autofocus>
                    @error('colum_four')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Colum Five: </label>
                    <input id="colum_five" type="text" class="form-control @error('colum_five') is-invalid @enderror" name="colum_five" value="{{ $product->colum_five }}" placeholder="Enter Column Data Five" autocomplete="colum_five" autofocus>
                    @error('colum_five')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Colum Six: </label>
                    <input id="colum_six" type="text" class="form-control @error('colum_six') is-invalid @enderror" name="colum_six" value="{{ $product->colum_six }}" placeholder="Enter Column Data Six" autocomplete="colum_six" autofocus>
                    @error('colum_six')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 float-left">
                    <label>Product Image: <sup class="text-danger">*</sup></label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                    <br/>
                    <img src="{{ asset('images/product/images/'.$product->image) }}" style="height: 120px; width: 120px"><br/>

                </div>
                <div class="form-group col-md-6 float-left">
                    <label></label>
                    <input type="submit" name="btn" class="btn btn-success col-md-5 btn-block" value="Submit">
                </div>
            </form>
        </div>
      </div>
    @endsection
