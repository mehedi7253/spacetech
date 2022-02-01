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
                    <i class="fa fa-envelope"></i><a href="mailto:corporateask@gmail.com?subject = Feedback&body = Message" class="text-decoration-none"> spacetechelevators@gmail.com</a> |
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dance">Techonology</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#about">Product</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" target="_blank" href="">About Us </a>
                            <a class="dropdown-item" target="_blank" href="">Team Member</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#event">About</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" target="_blank" href="">About Us </a>
                            <a class="dropdown-item" target="_blank" href="">Team Member</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#teachers">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
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
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae hic quam debitis architecto doloribus dolor impedit? Fugit, esse! Officiis dolor ut, soluta architecto esse delectus praesentium expedita culpa facilis quis!
                        <br/> <br/>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae hic quam debitis architecto doloribus dolor impedit? Fugit, esse! Officiis dolor ut, soluta architecto esse delectus praesentium expedita culpa facilis quis!
                    </p>
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
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/filter.js') }}"></script>
    <script>
         $(document).on("scroll", function() {
            if ($(document).scrollTop() > 86) {
                $("#banner").addClass("w3hubs");
                // $("#banner").addClass("bgs");


            } else {
                $("#banner").removeClass("w3hubs");

            }
        });
    </script>
</body>
</html>
