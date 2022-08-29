<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
Use Illuminate\Support\Facades\Mail;
use App\Mail\CheckoutMail;

class CheckoutController extends Controller
{
    public function store()
    {
        $cart = Cart::where('user_id', Auth::user()->id);
        $cartUser = $cart->get();

        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->save();

        foreach ($cartUser as $ct) {
            $transaction->Detail()->create([
                'product_id' => $ct->product_id,
                'qty' => $ct->qty
            ]);
        }

        Mail::to($cart->first()->user->email)->send(new CheckoutMail($cartUser));

        Cart::where('user_id', Auth::user()->id)->delete();
        Alert::success('Sukses','Berhasil checkout, pesanan sedang diproses');
        return redirect('/');
    }
}
