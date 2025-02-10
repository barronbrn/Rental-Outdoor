@extends('layouts.main')

@section('content')
    <main class="">

        <div
            class="h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
            <img src="https://picsum.photos/seed/picsum/1900/850" class="absolute top-0 left-0 min-h-full ob" alt="">
            <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
                <div class="col-span-6">
                    <span class="uppercase text-white text-xs font-bold mb-2 block">OutdoorIn</span>
                    <h1 class="text-white font-extrabold text-5xl mb-8">Perlengkapan Terbaik Untuk Perjalanan Terbaik</h1>
                    <p class="text-stone-100 text-base">
                       Sewa,Pakai,Jelajah - Sesimpel Itu
                    </p>
                    <button
                        class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">Get
                        started</button>
                </div>
            </div>
        </div>
        <div class="m-5"></div>
        <div class="container mx-auto px-6">
            <div class="h-64 rounded-md overflow-hidden bg-cover bg-center"
                style="background-image: url('https://cdn.pixabay.com/photo/2021/11/03/12/28/forest-6765636_640.jpg')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Kategori</h2>
                        <p class="mt-2 text-gray-400">Menyewakan segala jenis alat-alat outdoor.</p>
                        <button
                            class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <span>Sewa Sekarang!</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2"
                    style="background-image: url('https://cdn.pixabay.com/photo/2018/12/24/22/19/camping-3893587_640.jpg')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Tenda Camping</h2>
                            <p class="mt-2 text-gray-400">Jelajahi alam tanpa ribet! Sewa tenda praktis, langsung berangkat.</p>
                            <button
                                class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Sewa Sekarang</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2"
                    style="background-image: url('https://cdn.pixabay.com/photo/2014/09/03/08/45/fire-434157_640.jpg')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Alat Memasak</h2>
                            <p class="mt-2 text-gray-400">Sewa alat masak outdoor, nikmati hidangan lezat di alam bebas.</p>
                            <button
                                class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
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
