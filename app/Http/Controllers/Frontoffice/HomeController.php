<?php

namespace App\Http\Controllers\Frontoffice;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show(): string
    {
        return view('homepage');
    }
}
