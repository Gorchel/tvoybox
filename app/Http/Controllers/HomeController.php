<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class HomeController extends Controller
{
    public function index() {
    	\Cart::add('293ad', 'Product 1', 1, 9.99);

    	return view('home');
    }

    public function order(Request $request) {
    	$order = new Order;
    	$order->client_name = $request->get('name');
    	$order->client_phone = $request->get('phone');
    	$order->text = $request->get('message');

    	if ($order->save()) {
    		return $order;
    	} else {
    		return response($order, 400)
    			->header('Content-Type', 400);
    	}
    }
}