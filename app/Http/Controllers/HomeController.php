<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //get 12 products
        $products = Products::where('status', 'Available')->limit(12)->get();
        $user = auth()->user();
        $category = Categories::all();
        return view('Welcome', compact('products', 'category'));

    }
}
