<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.header')
</head>
<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-100 bg-success position-absolute w-100"></div>

    {{-- sidebar --}}
    @include('layouts.partials.sidebar')


    <main class="main-content position-relative border-radius-lg ">

      {{-- top navigations --}}
        @include('layouts.partials.navigation')

      {{-- section is inserted here --}}
        @yield('content')


    </main>


    @include('layouts.partials.settings')

    <script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
    @yield('scripts')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  
</body>

</html>