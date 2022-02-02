@extends('layout')

@section('konten')
    <div class="container mx-auto mt-20">
        <div class="flex flex-wrap">
            {{-- @foreach ($products as $product)
                <div class="w-1/2 p-2">
                    <div class="bg-white rounded shadow-md">
                        <div class="flex flex-wrap">
                            <div class="w-1/3">
                                <img src="{{ $product->image }}" alt="">
                            </div>
                            <div class="w-2/3">
                                <div class="p-4">
                                    <h3 class="text-xl font-bold">{{ $product->name }}</h3>
                                    <p class="text-sm">{{ $product->description }}</p>
                                    <p class="text-sm">Rp. {{ $product->price }}</p>
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>
@endsection