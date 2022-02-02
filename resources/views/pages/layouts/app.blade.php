<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.layouts.header')
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
      @include('pages.layouts.nav')
    </nav>
    <!-- end nav -->

   <section class="main_content">
        @yield('content')
   </section>


    {{-- bigfooter --}}
    <section class="bigfooter">
       @include('pages.layouts.footer')
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
   @include('pages.layouts.script')
</body>
</html>
