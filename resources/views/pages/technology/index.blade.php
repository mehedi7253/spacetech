@extends('pages.layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mt-5 mb-5 float-left">

                    @foreach ($technologies as $technology)

                    @if ($technology->site == 'left')
                    <div class="card mt-4" style="border: 2px solid blue; border-radius: 10px">
                        <div class="card-body">
                            <div class="col-md-8 col-sm-12 float-left">
                                <h5 class="text-center p-2" style="background-color: red; color: white; border-radius: 10px">{{ $technology->tech_name }}</h5>
                                <p class="text-justify">
                                    @php echo $technology->description @endphp
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-12 float-left">
                                <img src="{{ asset('images/technology/images/'.$technology->image) }}" style="height: 150px;">
                            </div>
                        </div>
                    </div>
                    @elseif ($technology->site == 'right')
                        <div class="card mt-3" style="border: 2px solid red; border-radius: 10px">
                            <div class="card-body">
                                <div class="col-md-4 col-sm-12 float-left">
                                    <img src="{{ asset('images/technology/images/'.$technology->image) }}" style="height: 150px;">
                                </div>
                                <div class="col-md-8 col-sm-12 float-left">
                                    <h5 class="text-center p-2" style="background-color: red; color: white; border-radius: 10px">{{ $technology->tech_name }}</h5>
                                    <p class="text-justify">
                                        @php echo $technology->description @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>

                <div class="col-md-4 col-sm-12 float-left mt-5 mb-5">
                    <div class="card mt-4" style="border: 2px solid red; border-radius: 10px">
                        <div class="card-body">
                            <h3 class="font-weight-bold">Technology We Used</h3>
                            <div class="">
                                @foreach ($technologies as $technology)
                                    @if ($technology->site == 'left')
                                        <a href=""><li class="fa fa-arrow-circle-right" style="color: #0172BC"> {{ $technology->tech_name }}</li></a><br/>
                                    @else
                                        <a href=""><li class="fa fa-arrow-circle-right" style="color: red"> {{ $technology->tech_name }}</li></a><br/>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    {{ $technologies->links() }}
                </div>
            </div>
        </div>
    @endsection
