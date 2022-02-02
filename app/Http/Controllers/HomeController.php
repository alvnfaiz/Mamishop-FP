<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //get 12 products
        $products = Products::inRandomOrder()->limit(12)->get();
        $user = auth()->user();
        $category = Category::all();
        return view('Welcome');

    }
}
