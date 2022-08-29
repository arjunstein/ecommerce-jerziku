<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $title = 'Selamat datang di Tokoku';
        $data = Product::orderBy('name','asc')->simplePaginate(8);
        return view('welcome',compact('title','data'));
    }
}
