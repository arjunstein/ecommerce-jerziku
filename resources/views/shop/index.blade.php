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
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
          Category
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/shop">All</a>
          @foreach ($categories as $category)
              <a class="dropdown-item {{ $category->id == $id ? 'active' : '' }}" href="{{ url('shop/'.$category->id) }}">{{ $category->name }}</a>
          @endforeach
        </div>
      </div> <br>
      
      <div class="row justify-content-center">
          @foreach ($products as $product)
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-c">
              <div class="article-header">
                <div class="article-image" data-background="{{ asset($product->image) }}">
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h4><a href="/show/{{ $product->id }}">{{ $product->name }}</a></h4>
                </div>
                <p>Rp. {{number_format ($product->price)}} </p>
                <div class="row">
                  <div class="col-md-12">
                    <center>
                  <a href="/show/{{ $product->id }}" class="btn btn-primary btn-sm">Buy</a>
                    </center>
                </div>
              </div>
              </div>
            </article>
          </div>      
          @endforeach
      </div>
      <center>  {{ $products->links() }}</center>
    </div>
    </div>
    
  </section>
@endsection
