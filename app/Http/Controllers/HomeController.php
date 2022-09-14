<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function show(): string
    {
        return view('homepage');
    }
}
