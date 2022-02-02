<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
        $category = Categories::all();
        return view('products.create', compact('category'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'deskripsi' => 'required|string|max:255',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'categories_id' => 'required|integer',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        Products::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'price' => $request->price,
            'stock' => $request->stock,
            'categories_id' => $request->categories_id,
            'status' => $request->status,
            'image' => $new_name,
        ]);
        return redirect()->route('products.index');
    }

}
