<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sale extends Controller
{
    public  function order(){
        return view('sale.order');
    }
    public  function order_item(){
        return view('sale.order_item');
    }
}
