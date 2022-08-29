<!DOCTYPE html>
<html lang="en">
<head>

  @include('partials.head')

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      
      @include('partials.navbar')
      @include('partials.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        
        @yield('content')
      
    </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {{ now()->year }} <div class="bullet"></div> Design By <a href="https://getstisla.com/">Stisla</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @include('partials.scripts')
  @include('sweetalert::alert')
  <!-- Page Specific JS File -->
</body>
</html>
