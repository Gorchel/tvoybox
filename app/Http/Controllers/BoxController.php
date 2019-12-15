<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function show(Request $request, $id) {
    	if (!isset(config('boxes')[$id])) {
    		return ['response' => 404];
    	}

    	return ['response' => 200, 'box' => config('boxes')[$id]];
    }
}