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
          {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/banner/Banner_1.jpg') }}" alt="First slide">
            <div class="col-md-7 mx-auto carousel-caption" style="border: 1px solid red">
                <h2 class="text-white font-weight-bold font-italic" style="font-size: 70px; font-weight: 700; text-shadow: 5px 5px 3px #000;"><span style="color:#0172BC;">SpaceTech</span> <br/>
                    <span style="color: #FF0202;">Elevator & Escalator</span>
                </h2>
            </div>
        </div>
          {{-- <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/elevator-engine-elevator-engine-abandoned-house-118425485.jpg') }}" alt="Second slide" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/Maintenance-Banner.jpg') }}" alt="Third slide" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/banner/istockphoto-1045852986-612x612.jpg') }}" alt="Fourth slide" >
          </div>
        </div> --}}
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>


        {{-- <section class="slider_contatct" style="margin-top: -35%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 mb-5 mt-5 float-left">
                        <h2 class="text-white font-weight-bold font-italic d-none d-lg-block" style="font-size: 70px; font-weight: 700; text-shadow: 5px 5px 3px #000; margin-top:100px"><span style="color:#0172BC;">SpaceTech</span> <br/>
                            <span style="margin-left: 42px; color: #FF0202;">Elevator & Escalator</span>
                        </h2>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-5 mt-5 float-left">
                        <div class="card" style="border: 1px solid #FF0202">
                            <div class="card-header" style="background-color: #FF0202">
                                <p class="text-center"><span class="font-weight-bolder text-capitalize">Send Message</span> </p>
                            </div>
                            <div class="card-body" style="background-color: #0172BC">
                               <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name.." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="phone" placeholder="Phone Number.." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email..." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message...." class="form-control" name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btn" class="btn btn-success" value="Send Message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

      </div>

      {{-- end banner --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
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
