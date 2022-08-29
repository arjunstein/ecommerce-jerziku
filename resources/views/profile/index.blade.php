@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>{{ $title }}</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/dashboard"><i class="fa fa-home"></i></a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, {{ \Auth::user()->name }}</h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
              
            </div>
            <div class="profile-widget-description">
              <div class="profile-widget-name">{{ \Auth::user()->name }} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
              <label for="">Email :</label>
              <p>{{ \Auth::user()->email }}</p>
              <label for="">Address :</label>
              <p>{{ \Auth::user()->address }}</p>  
              <label for="">Phone :</label>
                <p>{{ \Auth::user()->phone }}</p>
            </div>    
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" class="needs-validation" novalidate="">
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input type="text" class="form-control" value="" required="">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Last Name</label>
                      <input type="text" class="form-control" value="Maman" required="">
                      <div class="invalid-feedback">
                        Please fill in the last name
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input type="email" class="form-control" value="ujang@maman.com" required="">
                      <div class="invalid-feedback">
                        Please fill in the email
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Phone</label>
                      <input type="tel" class="form-control" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Bio</label>
                      <textarea class="form-control summernote-simple">{{ \Auth::user()->name }} </textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-0 col-12">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                        <div class="text-muted form-text">
                          You will get new information about products, offers and promotions
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection