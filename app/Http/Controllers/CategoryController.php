<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function index()
    {
        //
        $categories = Categories::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        //
        return view('category.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->route('category.index');
    }

    public function edit(Request $request)
    {
        //
        $category = Categories::where('category_id', $request->id)->first();
        return view('category.edit', compact('category'));

    }

    public function update(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,'.$request->id,
        ]);

        $category = Category::where('category_id', $request->id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect()->route('category.index');
    }

    public function destroy(Request $request)
    {
        //
        $category = Category::find($request->id);
        $category->delete();

        return redirect()->route('category.index');
    }
}
