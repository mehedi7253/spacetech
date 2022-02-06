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
            <h5 class="text-primary">All Products <a href="{{ route('products.create') }}" class="btn btn-info float-right">Add Product</a></h5>
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
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image one</th>
                            <th>Image Two</th>
                            <th>Image Three</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $i=>$product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->title }}</td>
                            <td>
                                @if ($product->image_one == NULL)
                                    NULL
                                @else
                                    <img src="{{ asset('images/product/images/'.$product->image_one) }}" class="img-thumbnail" style="height: 50px; width: 50px">
                                @endif
                            </td>
                            <td>
                                @if ($product->image_two == NULL)
                                    NULL
                                @else
                                    <img src="{{ asset('images/product/images/'.$product->image_two) }}" class="img-thumbnail" style="height: 50px; width: 50px">
                                @endif
                            </td>
                            <td>
                                @if ($product->image_three == NULL)
                                    NULL
                                @else
                                    <img src="{{ asset('images/product/images/'.$product->image_three) }}" class="img-thumbnail" style="height: 50px; width: 50px">
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('productmetas.destroy', $product->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('productmetas.edit', $product->id) }}"><i class="fa fa-edit"></i></a> |
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete !!');"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>

    @endsection
