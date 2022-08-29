<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function index()
    {
        $title = 'Keranjang';
        $total = 0;
        $products = Product::orderBy('id','asc')->get();
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart.index',compact('title','products','cart','total'));
    }

    public function store(Request $request)
    {
        $duplicate = Cart::where('product_id', $request->product_id)->first();
       
        if ($duplicate) {
            Alert::error('Gagal','Barang sudah ada di cart');
            return redirect('/cart');
        }

        Alert::success('Sukses','Berhasil ditambahkan ke keranjang');
        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->qty = 1;
        $cart->save();

        return redirect('/cart');
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->qty = $request->quantity;
        $cart->save();

        return response()->json([
            'success' => true,
            'data' => $cart
        ]);
    }
    
    public function delete($id)
    {
        // Alert::question('Konfirmasi', 'Yakin ingin hapus?');
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }
}
