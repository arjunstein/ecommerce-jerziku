@extends('layouts.applogin')

@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        {{-- <div class="login-brand">
          <img src="../assets/img/stisla-fill.svg" alt="logo" width="90" class="shadow-light rounded-circle">
        </div> --}}

        <div class="card card-primary">
          <div class="card-header"><h4>Please Login</h4></div>
          <div class="card-body">
            @if ($errors->has('email'))
            <span class="alert-danger">
                <strong>Email or password are wrong, please try again</strong>
            </span>
            @endif
            <form method="POST" action="{{ route('login') }}">
         
            @csrf
         
              <div class="form-group">
                <label for="email">Email</label>
                <span class="fa fa-envelope"></span>
                <input id="email" type="email" class="form-control" placeholder="youremail@company.com" name="email" value="{{ old('email') }}" tabindex="1" required>
                
            </div>

              <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <span class="fa fa-lock"></span>
                    <div class="float-right">
                      @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}" class="text-small">
                        Forgot Password?
                      </a> 
                      @endif
                  </div>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required autocomplete="current-password" placeholder="Your password">
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">Remember Me</label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                  Login
                </button>
              </div>
            </form>

          </div>
        </div>
        <div class="mt-5 text-muted text-center">
          Don't have an account? <a href="{{ route('register') }}">Create One</a>
        </div>
        <div class="simple-footer">
          Copyright &copy; Stisla 2018
        </div>
      </div>
    </div>
  </div>
@endsection