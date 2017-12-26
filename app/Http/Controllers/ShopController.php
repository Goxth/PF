<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function index()
    {   $tienda=Product::all();
        return view('skltn.home',compact('tienda'));
    } 

    public function tienda()
    {   $tienda=Product::all();
        return view('skltn.tienda',compact('tienda'));
    } 
    
     public function contact()
    {
        return view('skltn.contact');
    } 

    public function item()
    {
        return view('skltn.item');
    }

}


