<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function shop()
    {
        return view('frontend.shop');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function product()
    {
        return view('frontend.product');
    }
}
