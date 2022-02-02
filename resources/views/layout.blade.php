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
                        <a href="{{ route('home') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Home
                        </a>
                        <a href="{{ route('home') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            About
                        </a>
                        <a href="{{ route('category.index') }}" class="p-4 font-semibold text-sky-500 hover:bg-sky-500 hover:text-white">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center">
                @if(auth()->user())
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="p-4 font-semibold text-blue-500 hover:bg-blue-500 hover:text-white">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{ route('login') }}" class="p-2 font-semibold text-blue-500 rounded hover:bg-blue-500 hover:text-white">
                    Login
                </a>
                <a href="{{ route('register') }}" class="p-2 ml-4 font-semibold text-white rounded hover:bg-blue-500 bg-sky-500">
                    Register
                </a>
                @endif
                
            </div>
        </div>
    </div>
     @yield('konten')
</body>

</html>