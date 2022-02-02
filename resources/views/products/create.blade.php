@extends('dashboard-layout')

@section('konten')
    <div class="container px-10 py-6 mx-auto mt-20 bg-white shadow-xl">
        <h2 class="text-2xl font-medium text-center text-blue-600">Tambah Produk</h2>

        <div class="mt-10">
            <div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="name" class="block text-sm font-medium text-gray-700">
                                            Nama Produk
                                        </label>
                                        <div class="flex mt-1 shadow-sm">
                                            <input type="text" name="name" id="name" class="flex-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nama Produk">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="harga" class="block text-sm font-medium text-gray-700">
                                            Harga
                                        </label>
                                        <div class="flex mt-1 shadow-sm">
                                            Rp.  <input type="number" step="any" name="harga" id="harga" class="flex-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="120000">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="email" class="block text-sm font-medium text-gray-700">
                                            Stok
                                        </label>
                                        <div class="flex mt-1 shadow-sm">
                                            <input type="number" name="stok" id="stok" class="flex-1 block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="500">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                                        <select id="category" name="category" autocomplete="category" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">United States</option>
                                            <option value="">Canada</option>
                                            <option value="">Mexico</option>
                                        </select>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="description" class="block text-sm font-medium text-gray-700">
                                            Deskripsi
                                        </label>
                                        <div class="mt-1">
                                            <textarea id="description" name="description" rows="3" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                            Silahkan diisi deskripsi barang anda.
                                        </p>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700">
                                            Foto Produk
                                        </label>
                                        <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file" accept="image/png, image/jpeg">
                                                </label>
                                                
                                            </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG up to 2MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 text-right sm:px-6">
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
@endsection