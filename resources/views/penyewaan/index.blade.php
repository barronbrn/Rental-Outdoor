@extends('layouts.main')

@section('content')
    <main class="">
    <h3 class="text-gray-600 text-2xl font-medium">Edelweis</h3>
            {{-- Peralatan Dengan Kategori Camping --}}
            <div class="mt-10">
                <h3 class="text-gray-600 text-2xl font-medium">Kategori Camping</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach ($peralatan as $item)
                        @if ($item->jenis == 'Camping')
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="relative">
                                    <img src="{{ $item->foto }}" alt="Gambar Produk" class="w-full h-60 object-cover">
                                    <button
                                        class="absolute bottom-2 right-2 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500">
                                        Sewa Sekarang
                                    </button>
                                </div>
                                <div class="px-5 py-3">
                                    <h3>Rp. {{ number_format($item->harga, 0, ',', '.') }} / Hari</h3>
                                    <h3 class="text-gray-700 uppercase">{{ $item->namaPeralatan }}</h3>
                                    <div class="text-gray-500 mt-2">
                                        @foreach ($item->deskripsi as $desc)
                                            <!-- Perbaikan di sini -->
                                            <p>- {{ $desc }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>


            {{-- Peralatan Dengan Kategori Alat Masak --}}
            <div class="mt-16">
                <h3 class="text-gray-600 text-2xl font-medium">Kategori Camping</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach ($peralatan as $item)
                        @if ($item->jenis == 'Alat Masak')
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="relative">
                                    <img src="{{ $item->foto }}" alt="Gambar Produk" class="w-full 5-60 object-cover">
                                    <button
                                        class="absolute bottom-2 right-2 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500">
                                        Sewa Sekarang
                                    </button>
                                </div>
                                <div class="px-5 py-3">
                                    <h3>Rp. {{ number_format($item->harga, 0, ',', '.') }} / Hari</h3>
                                    <h3 class="text-gray-700 uppercase">{{ $item->namaPeralatan }}</h3>
                                    <div class="text-gray-500 mt-2">
                                        @foreach ($item->deskripsi as $desc)
                                        <!-- Perbaikan di sini -->
                                        <p>- {{ $desc }}</p>

                                        
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                        @endif
                    @endforeach
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
