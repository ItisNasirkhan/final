<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function contact(){
        return view('home.contact');
    }

    public function contact_content(){
        return view('home.contact_content');
    }

    public function shop(){
        return view('home.shop');
    }

    public function shop_content(){
        return view('home.shop_content');
    }

    


}
