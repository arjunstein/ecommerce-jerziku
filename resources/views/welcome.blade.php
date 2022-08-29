<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="/" class="navbar-brand sidebar-gone-hide">Jerziku</a>
        {{-- <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div> --}}
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-bars"></i>
          </a>
          
          <ul class="navbar-nav">
            <li class="nav-item"><a href="/shop" class="nav-link">Shop</a></li>
            <li class="nav-item"><a href="/cart" class="nav-link">Cart</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
         
          @if (Route::has('login'))
            @auth
              <li class="nav-item active"><a href="{{ url('dashboard') }}" class="nav-link">Home</a></li>    
            @else
              <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @if (Route::has('register'))
              <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>  
            @endif
              @endauth
          @endif
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">  
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Selamat datang di Jerziku</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Jerziku</h2>
            <p class="section-lead">Menjual berbagai jersey lokal dan internasional</p>
            <div class="card">
              <div class="card-header">
                <h4>Our Products</h4>
              </div>
              <div class="card-body">
                <div class="row justify-content-center">
                  @foreach ($data as $dt)
                  <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article">
                      <div class="article-header">
                        {{-- <div class="article-image" data-background="{{ asset("storage/$dt->image") }}">
                        </div> --}}
                        <img src="{{ asset($dt->image) }}" alt="products">
                        <div class="article-title">
                          <h2><a>{{ $dt->name }}</a></h2>
                        </div>
                      </div>
                      <div class="article-details">
                        <p>Rp. {{number_format ($dt->price) }}<br>
                        <a href="{{ url('show/'.$dt->id) }}">Detail product</a> </p>
                        <div class="article-cta">
                          <a href="/show/{{ $dt->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                      </div>
                    </article>
                  </div>      
                  @endforeach    
              </div>
              <center>{{ $data->links() }}</center>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {{ now()->year }} <div class="bullet"></div> Design By Stisla | <a href="#">Jerziku</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>
