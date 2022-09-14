<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

        /**
        * Show the product page.
        *
        * @return String
        *
        */
        public function show(): string
        {
            return 'Product';
        }

        /**
        * Show the product page.
        *
        * @param int $id
        * @return String
        *
        */
        public function showId(int $id): string
        {
            return 'Product ' . $id;
        }
}
