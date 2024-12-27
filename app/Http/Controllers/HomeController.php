<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function index_content(){
        $products = Product::all(); // Retrieve all products
        return view('home.index_content', compact('products'));
    }
}
