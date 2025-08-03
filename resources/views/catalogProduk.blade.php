@extends('layouts.main')

@section('content')
    <main class="">
        <div class="container mx-auto px-6">
            <div class="flex flex-col mb-6 md:flex-row md:-mx-4">
                <div class="md:w-1/4 p-4 bg-white shadow-md rounded-md">
                    <h2 class="text-lg font-semibold mb-4">Kategori</h2>
                    @if (isset($jenis))
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
                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 mt-6">
                        @foreach ($peralatan as $index => $item)
                            <div class="w-full mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="relative">
                                    <img src="{{ $item->foto }}" alt="Gambar Produk" class="w-full h-40 object-cover">
                                    <button
                                        class="absolute bottom-2 right-2 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500">Sewa
                                        Sekarang</button>
                                </div>
                                <div class="px-3 py-2">
                                    <h3 class="text-sm">Rp. {{ number_format($item->harga, 0, ',', '.') }} / Hari</h3>
                                    <h3 class="text-gray-700 uppercase text-sm">{{ $item->namaPeralatan }}</h3>
                                    <div class="text-gray-500 mt-1 text-xs">
                                        @php
                                            $descriptions = is_array($item->deskripsi)
                                                ? $item->deskripsi
                                                : explode(', ', $item->deskripsi);
                                            $truncated = array_slice($descriptions, 0, 2);
                                        @endphp

                                        @foreach ($truncated as $desc)
                                            <p>- {{ $desc }}</p>
                                        @endforeach

                                        @if (count($descriptions) > 2)
                                            <button class="text-blue-500 text-xs mt-1 read-more-btn"
                                                data-target="desc-{{ $index }}">
                                                Read More...
                                            </button>
                                            <div id="desc-{{ $index }}" class="hidden">
                                                @foreach (array_slice($descriptions, 2) as $desc)
                                                    <p>- {{ $desc }}</p>
                                                @endforeach
                                                <button class="text-blue-500 text-xs mt-1 read-less-btn"
                                                    data-target="desc-{{ $index }}">Read Less</button>
                                            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.read-more-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetDesc = document.getElementById(targetId);
                    this.classList.add('hidden');
                    targetDesc.classList.remove('hidden');
                });
            });

            document.querySelectorAll('.read-less-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetDesc = document.getElementById(targetId);
                    targetDesc.classList.add('hidden');
                    targetDesc.previousElementSibling.classList.remove('hidden');
                });
            });
        });
    </script>
@endsection
