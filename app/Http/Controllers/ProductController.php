<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view("product.index", ['products' => $products]);

    }

    public function category()
    {
        return view("product.category", ['cat' => 'catalogue']);
    }

    public function country()
    {
        return view("product.country", ['name' => 'catalogue']);
    }

    public function show(Product $product)
    {
        return view("product.show", ['product' => $product]);
    }

}
