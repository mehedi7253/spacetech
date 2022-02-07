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
            <h5 class="text-primary">Update Technology <a class="btn btn-info float-right" href="{{ route('technologies.index') }}">All Technology</a></h5>
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
            <form action="{{ route('technologies.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Technology Name: <sup class="text-danger">*</sup></label>
                    <input id="tech_name" type="text" class="form-control @error('tech_name') is-invalid @enderror" name="tech_name" value="{{ $technology->tech_name }}" placeholder="Enter Technology Name" autocomplete="tech_name" autofocus>
                    @error('tech_name')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Float: <sup class="text-danger">*</sup></label>
                    <select class="form-control" name="site">
                        @if ($technology->site == 'left')
                            <option value="left">Left</option>
                        @elseif ($technology->site == 'right')
                            <option value="right">Right</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Technology Image: <sup class="text-danger">*</sup></label>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                         <label style="color: red">{{ $message }}</label>
                     </span>
                    @enderror
                    <br/>
                    <img src="{{ asset('images/technology/images/'.$technology->image) }}" style="height: 120px; width: 120px"><br/>
                </div>
                <div class="form-group">
                    <label>Prodcut Description: <sup class="text-danger">*</sup></label>
                    <textarea id="application" name="description" placeholder="Enter Description" class="form-control @error('description') is-invalid @enderror">{{ $technology->description }}</textarea>
                    @error('description')
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
    @section('script')
    <script>
        CKEDITOR.replace('application',
            {
                height:300,
                resize_enabled:true,
                wordcount: {
                    showParagraphs: false,
                    showWordCount: true,
                    showCharCount: true,
                    countSpacesAsChars: true,
                    countHTML: false,
                    maxCharCount: 20}
            });
    </script>
    @endsection
