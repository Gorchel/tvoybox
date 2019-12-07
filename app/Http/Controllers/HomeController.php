<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class HomeController extends Controller
{
    public function index() {
    	// \Cart::destroy();
        // dd(\Cart::content());
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

    public function addToCart(Request $request, $id) {
        if (!isset(config('boxes')[$id])) {
            return ['response' => 404];
        }

        $box = config('boxes')[$id];
        
        \Cart::add($id, $box['name'], 1, $box['price']);

        return ['response' => 200];
    }

    public function getCartCount() {
        return \Cart::count();
    }
}