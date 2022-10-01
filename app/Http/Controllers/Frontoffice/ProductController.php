<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $eproducts = Product::all();

        return view('frontoffice.products.index', ['eproducts' => $eproducts]);
    }

    public function show(Product $eproduct)
    {
        return view('frontoffice.products.show', ['eproduct' => $eproduct]);
    }

    public function showByOrder(string $order)
    {
        if (in_array($order, ['name', 'price'])) {
            $eproducts = Product::orderBy($order, 'asc')->get();
        } else {
            $eproducts = Product::all();
        }

        return view('frontoffice.products.index', ['eproducts' => $eproducts]);
    }


}
