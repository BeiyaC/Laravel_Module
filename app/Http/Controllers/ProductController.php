<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function show()
    {
        return view('product-list');
    }

    public function showId(int $id)
    {
        return view('product-details', ['number' => $id]);
    }
}
