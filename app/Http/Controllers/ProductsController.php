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

        //ddd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'stock' => 'required|integer',
            'categories_id' => 'required|integer',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $validatedData['image'] = $request->image->move(public_path('images/products'), $imageName);
        Products::create($validatedData);
        return redirect()->route('product.index');
    }

    public function edit(Request $request){
        $post = Products::where('id', $request->id)->first();
        $category = Categories::all();
        return view('products.edit', compact('post', 'category'));
    }

    public function update(Request $request){
        
        //ddd($request);
        $data = [
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'stock' => 'required|integer',
            'categories_id' => 'required|integer',
            'status' => 'required',
        ];
        
        if($request->file('image')){
            $data['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        $validatedData = $request->validate($data);
        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();  
            $validatedData['image'] = $request->image->move(public_path('images/products'), $imageName);
        }
        
        Products::where('id', $request->id)
            ->update($validatedData);
        return redirect()->route('product.index');
    }

    public function destroy(Request $request)
    {
        //
        $product = Products::find($request->id);
        $product->delete();
        return redirect()->route('product.index');
    }

}
