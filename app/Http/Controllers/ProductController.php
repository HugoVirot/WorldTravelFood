<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    //

    public function showAll()
    {
        $products = DB::select('select * from products');

        return view('layouts.product.showAll',['products'=>$products]);
    }

    public function showByCat()
    {
        return  view("layouts.product.showByCat" ,['cat' => 'catalogue']);
    }

    public function showByCountry()
    {
        return  view("layouts.product.showByCountry" ,['name' => 'catalogue']);
    }

    public function getProduct($id)
    {
        $product = DB::select('select * from products where id = :id', ['id' => $id]);
        $product=$product[0];
        return view('layouts.product.getProduct', ['product'=>$product]);
    }

    public function index()
    {

    }

}
