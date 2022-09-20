<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function show()
    {
        return view('frontoffice.cart');
    }
}
