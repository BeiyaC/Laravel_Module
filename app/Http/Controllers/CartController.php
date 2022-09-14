<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function show(): string
    {
        return view('cart');
    }
}
