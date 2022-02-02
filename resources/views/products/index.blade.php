@extends('layout')

@section('konten')
    <div class="container mx-auto">
        <div class="bg-white">
            <div class="flex justify-between">
                <div class="w-1/2">
                    <h1 class="text-2xl font-bold">{{$store->name}}</h1>
                    <p class="text-sm">{{$store->description}}</p>
                </div>
                <div class="w-1/2">
                    <img src="{{$store->image}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection