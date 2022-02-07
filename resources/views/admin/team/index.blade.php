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
            <h5 class="text-primary">All Members <a href="{{ route('team.create') }}" class="btn btn-info float-right">Add Member</a></h5>
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
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $i=>$member)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->designation }}</td>
                            <td>
                                 <img src="{{ asset('images/team/images/'.$member->image) }}" class="img-thumbnail" style="height: 50px; width: 50px">
                            </td>
                            <td>
                                <form action="{{ route('team.destroy', $member->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('team.edit', $member->id) }}"><i class="fa fa-edit"></i></a> |
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
        <div class="card-footer">

        </div>
      </div>

    @endsection
