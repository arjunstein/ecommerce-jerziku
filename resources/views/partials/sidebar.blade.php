@php
use App\Models\Cart;
$cart = Cart::orderBy('id','asc')->get();
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/dashboard">Jerziku</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">T</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="#">General Dashboard</a></li>
              <li><a class="nav-link" href="#">Ecommerce Dashboard</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="/shop"><i class="fas fa-shopping-bag"></i> <span>Toko</span></a></li>
          <li><a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i> <span>Keranjang</span></a></li>
        </ul>

       
    </aside>
  </div>