@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>{{ $title }}</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/dashboard"><i class="fas fa-home"></i></a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Products</h2>
      <p class="section-lead">This products component is based on card and flexbox.</p>

      <div class="row justify-content-center">
        <div class="col-12 col-md-4 col-lg-3">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="{{ asset($data->image) }}">
                </div>
              </div>
              <div class="article-details">
                <div class="article-category">Rp. {{number_format ($data->price) }}</div>
                <div class="article-title">
                  <h2><a>{{ $data->name }}</a></h2>
                </div>
                <p>{{$data->desc}}</p>
                <div class="row">
                  <div class="col-md-12">
                    <form action="/cart/store" method="POST">
                      @csrf
                      <input type="hidden" value="{{ $data->id }}" name="product_id">
                      <input type="submit" class="btn btn-primary" value="Add to cart">
                    </form>
                  </div>
              </div>
              </div>
            </article>
          </div>  
      </div>
      </div>
    </div>
  </section>
@endsection