@extends('layouts.main')

@section('content')
    <main class="">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:-mx-4">
                <div class="md:w-1/4 p-4 bg-white shadow-md rounded-md">
                    <h2 class="text-lg font-semibold mb-4">Kategori</h2>
                    @if(isset($jenis))
                        <h2 class="text-lg font-semibold mb-4">Kategori : {{ $jenis }}</h2>
                    @endif
                    <ul class="space-y-2">
                        <li><a href="{{ route('catalogProduk.jenis', 'Alat Masak') }}"
                                class="text-blue-600 hover:underline">Alat Masak</a></li>
                        <li><a href="{{ route('catalogProduk.jenis', 'Camping') }}"
                                class="text-blue-600 hover:underline">Camping</a></li>
                    </ul>
                </div>
                <div class="md:w-3/4 p-4">
                    <h3 class="text-gray-600 text-2xl font-medium">Katalog Produk</h3>
                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                        @foreach ($peralatan as $item)
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="relative">
                                    <img src="{{ $item->foto }}" alt="Gambar Produk" class="w-full h-60 object-cover">
                                    <button
                                        class="absolute bottom-2 right-2 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500">Sewa
                                        Sekarang</button>
                                </div>
                                <div class="px-5 py-3">
                                    <h3>Rp. {{ number_format($item->harga, 0, ',', '.') }} / Hari</h3>
                                    <h3 class="text-gray-700 uppercase">{{ $item->namaPeralatan }}</h3>
                                    <div class="text-gray-500 mt-2">
                                        @if (is_array($item->deskripsi))
                                            @foreach ($item->deskripsi as $desc)
                                                <p>- {{ $desc }}</p>
                                            @endforeach
                                        @else
                                            @foreach (explode(', ', $item->deskripsi) as $desc)
                                                <p>- {{ $desc }}</p>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Edelweis</a>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
        </div>
    </footer>
@endsection
