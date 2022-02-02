@extends('layout')

@section('konten')
    <div class="container mx-auto bg-white">
        @if($store!=null)
            <div class="flex items-center justify-between py-4">
                <h1 class="text-2xl font-bold">{{$store->name}}</h1>
                <a href="{{route('store.edit',$store->id)}}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</a>
            </div>
        @else
            <div class="flex items-center justify-between py-4">
                <h1 class="text-2xl font-bold">Tambah Toko</h1>
            </div>
        @endif
    </div>
@endsection