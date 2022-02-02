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
                    <div class="ml-4">
                        <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-800">
                            <span class="text-lg font-semibold text-gray-800">
                                <span class="text-lg font-bold text-blue-600">Mami</span><span class="italic text-blue-500">Shop</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-row items-center ml-auto">
                    <div class="flex flex-row items-center">
                        <a href="{{ route('home') }}" class="p-4 font-semibold text-blue-500 hover:bg-blue-500 hover:text-white">
                            Home
                        </a>
                        <a href="{{ route('home') }}" class="p-4 font-semibold text-blue-500 hover:bg-blue-500 hover:text-white">
                            Produk
                        </a>
                        <a href="{{ route('home') }}" class="p-4 font-semibold text-blue-500 hover:bg-blue-500 hover:text-white">
                            Toko
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @yield('konten')
</body>

</html>