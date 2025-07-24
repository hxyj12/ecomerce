<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartlist;
use App\Models\cartlists;

class cartlistController extends Controller
{
    public function cart_id()
    {
        $cartlists = cartlists::all(); // Assuming CartList is your model
        return view('home', compact('cartlists'));
    }
}
