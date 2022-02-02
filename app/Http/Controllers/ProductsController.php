<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        $category = Category::all();
        return view('products.create', compact('category'));
    }

}
