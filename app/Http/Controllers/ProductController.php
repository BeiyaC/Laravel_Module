<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }

    public function show()
    {
        return view('product-list');
    }

    public function showId(string $id)
    {
        $product = DB::select('select * from products where id = ?', [$id]);

        return view('product-details', ['product' => $product]);
    }


}
