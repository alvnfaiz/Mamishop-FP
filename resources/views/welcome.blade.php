@extends('layout')

@section('konten')
    <div class="container mx-auto mt-20">
        <div class="flex flex-wrap">
            @foreach ($products as $product)
                <div class="w-1/2 p-2 md:w-1/5 sm:w-4/12">
                    <div class="bg-white rounded-md shadow-md">
                        <div class="flex flex-col">
                            <div class="w-full ">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="" class="shadow">
                            </div>
                            <div class="w-full">
                                <div class="p-4">
                                    <h3 class="text-md font-bold text-blue-400">{{ $product->name }}</h3>
                                    <p class="text-sm inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Rp. {{ $product->price }}</p>
                                    <div class="block" aria-hidden="true">
                                        <div class="py-2">
                                          <div class="border-t border-white"></div>
                                        </div>
                                    </div>
                                    <a href="{{ route('product.show', $product->id) }}" class="text-blue-600">Detail</a>
                                    <a href="{{ route('cart.add', $product->id) }}" class="px-4 py-2 bg-green-500 text-white rounded ml-4">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection