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
                <a class="nav-link" href="{{ url('technology') }}">Techonology</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="">Product</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('products/show') }}">Product Name </a>
                    <a class="dropdown-item"  href="{{ url('products') }}">More</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#event">About</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item"  href="{{ url('about') }}">About Us </a>
                    <a class="dropdown-item" href="{{ url('team-members') }}">Team Member</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('fetaures') }}">Features</a>
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
