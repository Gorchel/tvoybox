<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	\Cart::add('293ad', 'Product 1', 1, 9.99);

    	return view('home');
    }
}