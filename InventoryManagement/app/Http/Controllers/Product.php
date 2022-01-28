<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public  function productType(){
        return view('product.product_type');
    }
    public  function category(){
        return view('product.category');
    }
    public  function product(){
        return view('product.product');
    }
    public  function productSize(){
        return view('product.product_size');
    }
    public  function productUnit(){
        return view('product.product_unit');
    }
    public  function stock(){
        return view('stock.stock');
    }
}
