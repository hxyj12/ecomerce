<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class productsController extends Controller

{
    public function index()
{
    $products = products::all(); // Assuming Product is your model
    return view('home', compact('products'));
}
}
