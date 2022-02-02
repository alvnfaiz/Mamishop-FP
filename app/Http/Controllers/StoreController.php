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
        $store = \App\Models\Store::all();
        return view('store.index', ['store' => $store]);
    }

    public function create()
    {
        return view('store.create');
    }

    public function store(Request $request)
    {
        $store = new \App\Models\Store();
        $store->name = $request->input('name');
        $store->address = $request->input('address');
        $store->save();
        return redirect('/store/create')->with('success', 'Store has been added');
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

    public function destroy($id)
    {
        $store = \App\Models\Store::find($id);
        $store->delete();
        return redirect('/store')->with('success', 'Store has been deleted');
    }

    
}
