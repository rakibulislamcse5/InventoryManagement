<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Purchase extends Controller
{
    public  function order(){
        return view('purchase.order');
    }
    public  function order_item(){
        return view('purchase.order_item');
    }
    
}
