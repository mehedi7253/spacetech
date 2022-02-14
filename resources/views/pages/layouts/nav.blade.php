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
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
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
                    <a class="dropdown-item"  href="{{route('about-us')}}">About Us </a>
                    <a class="dropdown-item" href="{{ route('teammembers') }}">Team Member</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Our Design</a>
                <div class="dropdown-menu">
                    @php
                        $designs = DB::table('designs')->get();
                    @endphp
                    @foreach ($designs as $design)
                      <a class="dropdown-item" href="{{ route('pages.design.show', ['url' => $design->url]) }}">{{ $design->name }} </a>
                    @endforeach
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
