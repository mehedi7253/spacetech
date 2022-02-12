<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpaceTech Elevator & Escalator</title>
    <link rel="stylesheet" href="{{ asset('assets/style/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/style/main.css') }}" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/nav.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo/spacetech-logo.png') }}">
</head>
<body>
    <section class="top_header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 float-left top_header_link">
                    <i class="fa fa-phone"></i><a href="tel:01730711050" class="text-decoration-none"> (+88) 01730 711050</a> |
                    <i class="fa fa-envelope"></i><a href="mailto:spacetechelevators@gmail.com?subject = Feedback&body = Message" class="text-decoration-none"> spacetechelevators@gmail.com</a> |
                    <i class="fa fa-clock-o"> 24/7 Suport</i>
                </div>
                <div class="col-md-2 col-sm-12 float-left top_social_icon">
                    <ul class="float-right">
                        <li class="fa fa-facebook fa-1x"></li>
                        <li class="fa fa-youtube fa-1x"></li>
                        <li class="fa fa-envelope fa-1x"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-default" id="banner">
        <div class="container">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo/spacetech-logo.png') }}" style="width: 150px; height: auto; padding: 10px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our-technologies') }}">Techonology</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('products') }}">Product</a>
                        <div class="dropdown-menu">
                            @php
                                $prodects = DB::table('product_services')->limit('5')->get();
                            @endphp
                            @foreach ($prodects as $service)
                              <a class="dropdown-item" href="{{ route('pages.products.show', ['url' => $service->url]) }}">{{ $service->service_name }} </a>
                            @endforeach
                            <a class="dropdown-item"  href="{{ route('products') }}">More</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('about-us') }}">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item"  href="{{ route('about-us') }}">About Us </a>
                            <a class="dropdown-item" href="{{ route('teammembers') }}">Team Member</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fetaures') }}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactform') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->

    {{-- banner --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/banner/Banner_1.jpg') }}" alt="First slide">
            <div class="col-md-12 col-sm-12 carousel_caption">
                <h2 class="banner_text"><span style="color:#FF0202;">SPACE<span style="color: #0172BC">TECH</span></span> <br/>
                    <span style="color: white;">Elevator & Escalator</span>
                </h2>
            </div>
        </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/elevator-engine-elevator-engine-abandoned-house-118425485.jpg') }}" alt="Second slide" >
            <div class="col-md-12 col-sm-12 carousel_caption">
                <h2 class=" banner_text"><span style="color:#FF0202;">SPACE<span style="color: #0172BC">TECH</span></span> <br/>
                    <span style="color: white;">Elevator & Escalator</span>
                </h2>
            </div>
        </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/Maintenance-Banner.jpg') }}" alt="Third slide" >
            <div class="col-md-12 col-sm-12 carousel_caption">
                <h2 class=" banner_text"><span style="color:#FF0202;">SPACE<span style="color: #0172BC">TECH</span></span> <br/>
                    <span style="color: white;">Elevator & Escalator</span>
                </h2>
            </div>
        </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/istockphoto-1045852986-612x612.jpg') }}" alt="Fourth slide" >
            <div class="col-md-12 col-sm-12 carousel_caption">
                <h2 class=" banner_text"><span style="color:#FF0202;">SPACE<span style="color: #0172BC">TECH</span></span> <br/>
                    <span style="color: white;">Elevator & Escalator</span>
                </h2>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- end banner --}}

    {{-- about us section --}}
    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 float-left mt-5 mb-5" style="border-right: 2px dotted #0172BC;">
                    <h3 class="font-weight-bold about_heading"><span style="color: #FF0202">About</span><span style="color: #0172BC">Us</span></h3>
                    @php
                        $aboutus = DB::table('abouts')->get();
                    @endphp
                    @foreach ($aboutus as $about)
                        <p class="text-justify">
                            <?php echo $about->description ?>
                        </p>
                    @endforeach
                </div>
                <div class="col-md-5 col-sm-12 mt-5 mb-5 float-left">
                    <h3 class="font-weight-bold service_provide" style="color: #FF0202" >Service We<span style="color: #0172BC"> Provide</span> </h3>

                    <div class="ml-3">
                        <li class="fa fa-arrow-circle-right" style="color: #0172BC"> Passenger Lift</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #FF0202"> Escalator</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #0172BC"> Cargo Lift</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #FF0202"> Hospital Lift</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #0172BC"> Capsul Lift</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #FF0202"> Observation Lift</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #0172BC"> Car Lift</li><br/>
                        <li class="fa fa-arrow-circle-right " style="color: #FF0202"> Bed Lift</li><br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about us section --}}

    {{-- working demo --}}
    <section class="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 mb-5 mt-5">
                    <h3 class="text-center text-danger mb-5">Our Previous Work</h3>
                    <div align="center">
                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="ongoing">Ongoing</button>
                        <button class="btn btn-default filter-button" data-filter="complete">Complete</button>
                    </div>
                    <br />

                    <div class="col-md-3 col-sm-12 float-left filter ongoing mt-3">
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 float-left ongoing filter mt-3">
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 float-left ongoing filter mt-3">
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 float-left ongoing filter mt-3">
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 float-left complete filter mt-3" >
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image" >
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 float-left complete filter mt-3" >
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 float-left complete filter mt-3" >
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 float-left complete filter mt-3" >
                        <div class="thumbnail">
                            <img alt="" src="{{ asset('images/project/istockphoto-1025375470-170667a.jpg') }}" class="filter_image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- working demo --}}

    {{-- our client --}}
    <section class="our_client">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 mt-5 mb-5">
                    <h3 class="text-center text-danger font-weight-bold">We Deal With</h3>
                    <div class="col-md-4 col-sm-12 float-left mt-5 deal_card">
                        <div class="card">
                            <img src="{{ asset('images/deal/Asset 2.png') }}" class="deal_image" alt="sigma">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 float-left mt-5">
                        <div class="card" style="border: 2px solid #0172BC; box-shadow: 5px 7px #888888;">
                            <img src="{{ asset('images/deal/Capture.PNG') }}" class="deal_image_fuji" alt="sigma">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 float-left mt-5 deal_card">
                        <div class="card">
                            <img src="{{ asset('images/deal/Asset 4.png') }}" class="deal_image_3" alt="sigma">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- our client --}}

    {{-- bigfooter --}}
    <section class="bigfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 float-left">
                    <h4 class="mt-3 mb-3 text-white text-uppercase">About Us</h4>
                    <hr class="footer_about">
                    <p class="text-justify text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, magni dolorem, quis unde odio magnam eligendi
                    </p>
                    <div class="col-md-8 mx-auto">
                        <ul class="social_icon_footer">
                            <a href=""><li class="fa fa-facebook fa-2x"></li></a>
                            <a href=""><li class="fa fa-youtube fa-2x"></li></a>
                            <a href=""><li class="fa fa-envelope fa-2x"></li></a>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12 float-left">
                    <h4 class="mt-3 mb-3 text-white text-uppercase ml-4">Address</h4>
                    <hr class="footer_about ml-4">
                    <div class="place">
                        <a href="" class="fa fa-map-marker"></a>
                        <span class="text">464/C, Khilgaon, Dhaka-1219, Bangladesh</span>
                    </div>
                    <div class="place">
                        <a href="" class="fa fa-phone"></a>
                        <span class="text">+080 1730711050</span>
                    </div>
                    <div class="place">
                        <a href="" class="fa fa-envelope"></a>
                        <span class="text">spacetechelevators@gmail.com</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 float-left">
                    <h4 class="mt-3 mb-3 text-white text-uppercase ml-4">Contact US</h4>
                    <hr class="footer_about ml-4">
                   <div class="ml-4">
                    <form>
                        <div class="form-group">
                            <label class="text-white">Email <sup class="font-weight-bold text-danger">*</sup></label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-white">Message <sup class="font-weight-bold text-danger">*</sup></label>
                            <textarea name="message" class="form-control" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="send" class="btn btn-danger btn-block">
                        </div>
                    </form>
                   </div>

                </div>
            </div>
        </div>
    </section>
    {{-- bigfooter --}}
    {{-- footer --}}
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <p class="text-center text-white" style="margin: 5px">Copyright By <span class="fa fa-copyright"></span> SpaceTech Elevators</p>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
    <button id="topBtn">
        <i class="fa fa-arrow-up"></i>
    </button>

    {{-- modal --}}

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border: 2px solid #FF0202">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">
                  <img src="{{ asset('images/quta/Asset 4.png') }}"><br/>
                  <img class="ml-5" src="{{ asset('images/quta/Asset 5.png') }}">
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="col-md-4 float-left">
                    <p class="text-center"><img src="{{ asset('images/quta/Asset 1.png') }}" style="height: auto;"></p>
                    <p  class="text-center">SAFE</p>
                </div>
                <div class="col-md-4 float-left">
                    <p class="text-center"> <img src="{{ asset('images/quta/Asset 2.png') }}" style="height: auto;"></p>
                    <p class="text-center">SMOOTH</p>
                </div>
                <div class="col-md-4 float-left">
                    <p class="text-center"> <img src="{{ asset('images/quta/Asset 3.png') }}" style="height: auto;"></p>
                    <p class="text-center">SENSIBLE</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
      </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
         $(document).on("scroll", function() {
            if ($(document).scrollTop() > 86) {
                $("#banner").addClass("w3hubs");
                // $("#banner").addClass("bgs");


            } else {
                $("#banner").removeClass("w3hubs");

            }
        });

        $(document).ready(function(){
		$("#exampleModalCenter").modal('show');
	});
    </script>
</body>
</html>
