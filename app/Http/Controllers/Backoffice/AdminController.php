<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('backoffice.homepage');
    }
}
