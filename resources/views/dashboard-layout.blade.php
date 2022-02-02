<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-50">
    <div class="bg-white shadow-md">
        <div class="container flex flex-row justify-between mx-auto">
            <div class="flex flex-row">
                <div class="flex flex-row items-center">
                    <a href="{{ route('home') }}">
                        <img src="https://i.ibb.co/nzGDjkh/Logo.png" alt="logo" class="h-10">
                    </a>
                </div>
                <div class="flex flex-row items-center">
                    <div class="flex flex-row items-center">
                        <a href="{{ route('product.index') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Produk
                        </a>
                        <a href="{{ route('category.index') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Kategori
                        </a>
                        <a href="{{ route('order.index') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Order
                        </a>
                        <a href="{{ route('message.index') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Message
                        </a>
                        <a href="{{ route('review.index') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Review
                        </a>
                        <a href="{{ route('settings') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Settings
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center">
                <span class="p-4 font-semibold text-blue-500">
                    {{ auth()->user()->name }}
                </span>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="p-4 font-semibold text-blue-500 hover:bg-blue-500 hover:text-white">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
     @yield('konten')
</body>

</html>