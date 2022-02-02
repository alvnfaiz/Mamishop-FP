@extends('dashboard-layout')

@section('konten')
    <div class="container mx-auto mt-20">
        <div class="">
            <a href="{{  route('product.create') }}"><button class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-sky-600">Tambah Produk</button></a>
            <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Stok
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                              <span class="sr-only">Edit</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                          @foreach ($products as $post)
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">
                                    {{ $post->name }}
                                  </div>
                                  <div class="text-sm text-gray-500">
                                    {{ $post->status }}
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-900">{{ $post->deskripsi }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                {{"Rp. " . number_format($post->price, 0, ",", ".")  }}
                              </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                              {{ $post->categories->name }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{ $post->stock }}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="{{ route('product.edit', $post->id) }}" class="text-indigo-600 hover:text-blue-400">Edit</a>
                              <form method="POST" action="{{ route('product.destroy', $post->id) }}">
                                @method('delete')
                                @csrf
                                <button class="ml-8 text-red-600 hover:text-red-400" onclick="window.confirm('Yakin menghapus data?')">Hapus</button>
                              </form>
                              
                            </td>
                          </tr>
                            
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection