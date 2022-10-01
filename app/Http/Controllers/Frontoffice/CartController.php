<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        return view('frontoffice.cart.index');
    }

    public function store(Request $request)
    {
        $quantity = $request->input('quantity');
        $eproduct = Product::find($request->input('id'));

        $request->validate(
            [
                'quantity' => 'required | integer | min:1 | max:' . $eproduct->quantity
            ]
        );

        return view('frontoffice.cart.show', ['quantity' => $quantity, 'eproduct' => $eproduct]);
    }
}
