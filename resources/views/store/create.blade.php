@extends('layout')

@section('konten')
    <div class="container px-10 py-6 mx-auto mt-20 bg-white">
        <h2 class="text-2xl font-medium text-center text-blue-600">Buat Toko</h2>
        <span>
            Mulailah membuat toko mu sendiri, dengan membuat toko pada MamiShop, kamu akan mendapatkan berbagai keuntungan.
        </span>
        <div class="mt-10">
            <div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                @csrf
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="name" class="block text-sm font-medium text-gray-700">
                                            Nama Toko
                                        </label>
                                        <div class="flex mt-1 shadow-sm">
                                            <input type="text" name="name" id="name" class="flex-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nama Toko">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="phone" class="block text-sm font-medium text-gray-700">
                                            No HP
                                        </label>
                                        <div class="flex mt-1 shadow-sm">
                                            <input type="text" name="phone" id="phone" class="flex-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="08xx xxxx xxxx">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="email" class="block text-sm font-medium text-gray-700">
                                            Email
                                        </label>
                                        <div class="flex mt-1 shadow-sm">
                                            <input type="email" name="email" id="email" class="flex-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="user@email.com">
                                        </div>
                                    </div>
                                </div>
                    
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Alamat
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="address" name="address" rows="3" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Silahkan diisi deskripsi toko anda.
                                    </p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Foto Profil Toko
                                    </label>
                                    <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md" id="drop-area">
                                        <div class="space-y-1 text-center">
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="">
                                                    <span>Upload a file</span>
                                                    <input id="file" name="file" type="file" class="" accept="image/png, image/jpeg">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="image-preview" class="hidden w-48 h-48">
                                        <img src="">
                                        <div id="close" class="absolute top-0 right-0 mt-4 mr-4 text-red-600">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        let imgInput = 
    </script>
@endsection