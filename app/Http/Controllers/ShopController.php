<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request, $id = null)
    {
        $title = 'Shop';
        $categories = Category::all();
        $products = Product::where('name', 'LIKE', '%'.$request->search.'%')->simplePaginate(6);
        return view('shop.index',compact('title','products','categories','id'));
    }

    public function category($id)
    {
        $title = 'Category';
        $categories = Category::all();
        $products = Product::where('category_id', $id)->simplePaginate(3);
        return view('shop.index',compact('title','products','categories','id'));
    }

    public function show($id)
    {
        $title = 'Detail product';
        $data = Product::findOrFail($id);
        // $categories = category::findOrFail($id);
        return view('shop.show',compact('title','data'));
    }
}
