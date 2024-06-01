<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts.admin.nav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.admin.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            @include('layouts.admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('layouts.admin.script')
  </body>
</html>
