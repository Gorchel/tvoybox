<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function show(Request $request, $id) {
    	if (!isset(config('boxes')[$id])) {
    		return ['responce' => 404];
    	}

    	return ['responce' => 200, 'box' => config('boxes')[$id]];
    }
}