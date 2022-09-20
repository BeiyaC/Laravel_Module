<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::select('SELECT * FROM products');

        return view('frontoffice.product-list', ['products' => $products]);
    }

    public function show()
    {
        return view('frontoffice.product-list');
    }

    public function showId(Product $product)
    {
        return view('frontoffice.product-details', ['product' => $product]);
    }

    public function showByOrder(string $order)
    {
        if (in_array($order, ['name', 'price'])) {
            $products = Product::orderBy($order, 'asc')->get();
        } else {
            $products = Product::all();
        }

        return view('frontoffice.product-list', ['products' => $products]);
    }


}
