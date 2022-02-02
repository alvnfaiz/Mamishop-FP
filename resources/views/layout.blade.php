<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-50">
    <div class="bg-white shadow-md">
        <div class="flex flex-row justify-between container mx-auto">
            <div class="flex flex-row">
                <div class="flex flex-row items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('storage/Logo.png'); }}" alt="logo" class="h-10">
                    </a>
                    <div class="ml-4">
                        <a href="{{ route('home') }}" class="text-gray-800 text-lg font-semibold">
                            <span class="text-gray-800 text-lg font-semibold">
                                <span class="text-lg font-bold text-blue-600">Mami</span><span class="text-lg font-italic text-blue-600">Shop</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-row items-center ml-auto">
                    <div class="flex flex-row items-center">
                        <a href="{{ route('home') }}" class="text-blue-500 font-semibold hover:bg-blue-500 hover:text-white p-4">
                            Home
                        </a>
                        <a href="{{ route('home') }}" class="text-blue-500 font-semibold hover:bg-blue-500 hover:text-white p-4">
                            Produk
                        </a>
                        <a href="{{ route('home') }}" class="text-blue-500 font-semibold hover:bg-blue-500 hover:text-white p-4">
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