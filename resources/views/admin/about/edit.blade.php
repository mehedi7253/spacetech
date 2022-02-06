@extends('admin.layouts.app')
    @section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blank Page</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active" aria-current="page">{{ $page_name }}</li>
        </ol>
      </div>

      <div class="card">
        <div class="card-header">
            <h5 class="text-primary">About US <a href="{{ route('abouts.index') }}" class="btn btn-info float-right">About US</a> </h5>
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

            <form action="{{ route('abouts.update', $about->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <textarea class="form-control" name="description" id="application">{{ $about->description }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-success" value="Update">
                </div>
            </form>

        </div>

      </div>

    @endsection
