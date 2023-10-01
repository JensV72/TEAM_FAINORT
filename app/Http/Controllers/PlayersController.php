<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        return view('players');
        $product = new Product();
        $product->title = 'Phone';
        $product->price = 1050;
    }
}
