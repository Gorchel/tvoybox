<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class HomeController extends Controller
{
    public function index() {
    	// \Cart::destroy();

    	return view('home');
    }

    public function order(Request $request, $callback = false) {
    	$order = new Order;
    	$order->client_name = $request->get('name');
    	$order->client_phone = $request->get('phone');

        if ($request->has('message')) {
            $order->text = $request->get('message');
        }

        if ($request->has('email')) {
            $order->client_email = $request->get('email');
        }

        if ($request->has('address')) {
            $order->client_address = $request->get('address');
        }

        //Сохраняем товарыъ
        if (empty($callback)) {
            $order->boxes = json_encode(\Cart::content());
        }

    	if ($order->save()) {

            if (empty($callback)) {
                \Cart::destroy();
            }

            return response([
                'order' => $order,
                'content' => view('layout.partial.success')->render(),
            ], 200)
                ->header('Content-Type', 200);
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

    public function delete_item(Request $request, $id) {
        \Cart::remove($id);

        return ['response' => 200];
    }

    public function update_count(Request $request, $id) {
        $count = $request->get('count');

        \Cart::update($id, $count);

        return ['response' => 200];
    }

    public function getCart(Request $request) {
        $count = \Cart::count();

        if (empty($count)) {
            $content = view('layout.partial.empty_cart')->render();
        } else {
            $data = [];

            foreach (\Cart::content() as $key => $row) {
                if (isset(config('boxes')[$row->id])) {
                    $data[] = [
                        'id' => $row->id,
                        'count' => $row->qty,
                        'name' => $row->name,
                        'price' => $row->price,
                        'img' => config('boxes')[$row->id]['sm_img'],
                        'key' => $key,
                    ];
                } 
            }

            $only_panel = $request->get('only_panel');

            if (!empty($only_panel)) {
                $content = view('layout.partial.product_panel',['content' => $data])->render();
            } else {
                $content = view('layout.partial.cart',['content' => $data])->render();
            }
        }
        
        return ['count' => $count, 'content' => $content];
    }
}