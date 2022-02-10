
<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.layouts.header')
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      @include('admin.layouts.sidebar')
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          @include('admin.layouts.nav')
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid mb-5" id="container-wrapper">
            @yield('content')
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        @include('admin.layouts.footer')
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  @include('admin.layouts.script')
  @yield('script')
</body>

</html>
