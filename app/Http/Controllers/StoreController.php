<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    //CRUD
    public function index()
    {
        $store = \App\Models\User::find(1)->store;
        if(!$store) {
            return redirect()->route('store.create');
        }
        return view('store.index', ['store' => $store]);
    }

    public function create()
    {
        //if store exists, redirect to store.index
        $store = \App\Models\User::find(1)->store;
        if($store) {
            return redirect()->route('store.index');
        }
        return view('store.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        Store::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'user_id' => auth()->user()->id,
            'email' => $request->email,
            'image' => $imageName,
        ]);
        return redirect('/store')->with('success', 'Store has been added');
    }

    public function edit($id)
    {
        $store = \App\Models\Store::find($id);
        return view('store.edit', ['store' => $store]);
    }

    public function update(Request $request, $id)
    {
        $store = \App\Models\Store::find($id);
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->save();
        return redirect('/store/' . $id . '/edit')->with('success', 'Store has been updated');
    }



    
}
