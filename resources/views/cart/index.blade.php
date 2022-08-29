@extends('layouts.main')


@section('content')

<section class="section">
    <div class="section-header">
      <h5>{{ $title }} <i class="fa fa-shopping-cart"></i><span class="badge badge-danger">{{ $cart->count() }}</span></h5>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="/dashboard"><i class="fas fa-home"></i></a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <tr>
                      <th width="5%">#</th>
                      <th width="15%">Gambar</th>
                      <th width="20%">Nama barang</th>
                      <th width="25%">Deskripsi</th>
                      <th width="5%">Qty</th>
                      <th width="30%">Harga</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach ($cart as $e=>$ct)
                    <tr>
                      <td>{{ $e+1 }}</td>
                      <td><img src="{{ asset($ct->product->image) }}" alt="" width="150px"></td>
                      <td>{{ $ct->product->name }}</td>
                      <td>{{ $ct->product->desc }}</td>
                      <td>               
                        {{ method_field('PATCH') }}         
                        <select name="qty" class="quantity" data-item="{{ $ct->id }}">
                          @for ($i = 1; $i <= 5; $i++)
                              <option value="{{ $i }}" {{ $ct->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                          @endfor
                        </select>
                      </td>
                      <td><strong>Rp. {{number_format($ct->product->price * $ct->qty) }}</strong></td>
                      <td>
                        <form action="/cart-delete/{{ $ct->id }}" method="post">
                          @csrf
                          <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>    
                    @php
                        $total += ($ct->product->price * $ct->qty);
                    @endphp
                    @endforeach                   
                  </table>
                  @if ($cart->count() == 0)
                  <h6 style="text-align: center">Keranjang anda kosong, silahkan berbelanja</h6>
                  @endif
                </div>
                <div class="col-md-10 mr-2" style="text-align: right">
                  <p><h5>Subtotal : Rp. {{number_format ($total) }}</h5></p>
                  <form action="/checkout" method="post">
                    @csrf
                    <button class="btn btn-primary">Checkout</button>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<script type="text/javascript">
  (function (){
    const classname = document.querySelectorAll('.quantity');

    Array.from(classname).forEach(function(element){
      element.addEventListener('change', function(){
        const id = element.getAttribute('data-item');
        axios.patch(`/cart/${id}`, {
          quantity: this.value,
          id: id
        })
        .then(function (response){
          //console.log(response);
          window.location.href = '/cart'
        })
        .catch(function (error){
          console.log(error);
        });
      })
    })
  })();
  </script>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>  

@endsection
