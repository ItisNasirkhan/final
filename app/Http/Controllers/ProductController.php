<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDetails() {
        return view('home.product-details');
    }
}
