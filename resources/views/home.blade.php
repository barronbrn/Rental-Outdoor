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
                    <p class="text-stone-900 text-base">
                        Sewa,Pakai,Jelajah - Sesimpel Itu
                    </p>
                    <button
                        class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">Sewa
                        Sekarang</button>
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
                            <p class="mt-2 text-gray-400">Jelajahi alam tanpa ribet! Sewa tenda praktis, langsung berangkat.
                            </p>
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
                                <span>Sewa Sekarang</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Abotu Us --}}
            <section id="aboutUs">
                <div class="w-full py-24 ">
                    <div class="flex flex-col w-[90%] lg:w-4/5 2xl:w-3/5 mx-auto">
                        <div class="w-full md:w-4/5 md:mx-auto text-center pt-3 px-4 md:!px-0 ">
                            <h1 class="text-3xl mt-2 md:text-4xl font-semibold text-gray-800">
                                Mengapa Memilih <span class="text-emerald-600"> Kami?</span>
                            </h1>
                            <p class="text-xl font-thin mb-4 line-clamp-4 mt-4 md:line-clamp-none text-gray-500">
                                Kami menyediakan peralatan outdoor terbaik dengan kualitas terjamin, harga bersahabat, dan
                                layanan profesional untuk memastikan pengalaman berpetualang Anda lebih nyaman dan
                                menyenangkan.
                            </p>
                        </div>
                        <div class="w-full flex flex-col md:flex-row py-6 gap-8">
                            <div
                                class="w-full md:w-1/4 flex flex-col justify-items-center shadow-md dark:shadow-lg border-b-4 border-emerald-600 dark:border-y group hover:bg-emerald-600 py-12 px-6 rounded-md transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                    class="text-emerald-600 group-hover:text-white" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                </svg>
                                <h1
                                    class="text-2xl mt-2 md:text-3xl  font-semibold text-gray-800 dark:text-gray-800 group-hover:text-white">
                                    Kualitas Terbaik
                                </h1>
                                <p
                                    class="font-light md:font-thin mb-4 line-clamp-4 mt-4 md:line-clamp-none text-gray-800 group-hover:text-white dark:group-hover:text-gray-200">
                                    Semua peralatan outdoor kami selalu dalam kondisi prima, terawat, dan siap digunakan
                                    dalam
                                    berbagai kondisi alam.
                                </p>
                            </div>
                            <div
                                class="w-full md:w-1/4 flex flex-col justify-items-center shadow-md dark:shadow-lg border-b-4 border-emerald-600 dark:border-y group hover:bg-emerald-600 py-12 px-6 rounded-md transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                    class="text-emerald-600 group-hover:text-white" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm1.31-7.9l-.95.95c-.79.79-1.36 1.48-1.36 3.45h-2c0-2.38.99-3.54 2.06-4.61l1.24-1.26c.46-.46.7-1.1.7-1.76 0-1.38-1.12-2.5-2.5-2.5S9 7.62 9 9H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.11-.45 2.17-1.19 2.91z" />
                                </svg>
                                <h1
                                    class="text-2xl mt-2 md:text-3xl  font-semibold text-gray-800 dark:text-gray-800 group-hover:text-white">
                                    Harga Terjangkau
                                </h1>
                                <p
                                    class="font-light md:font-thin mb-4 line-clamp-4 mt-4 md:line-clamp-none text-gray-800 group-hover:text-white dark:group-hover:text-gray-200">
                                    Kami menawarkan harga sewa yang kompetitif, sehingga Anda bisa menikmati petualangan
                                    tanpa
                                    menguras dompet.
                                </p>
                            </div>

                            <div
                                class="w-full md:w-1/4 flex flex-col justify-items-center shadow-md dark:shadow-lg border-b-4 border-emerald-600 dark:border-y group hover:bg-emerald-600 py-12 px-6 rounded-md transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                    class="text-emerald-600 group-hover:text-white" viewBox="0 0 24 24">
                                    <path
                                        d="M13 3c-5.5 0-10 4.5-10 10s4.5 10 10 10 10-4.5 10-10-4.5-10-10-10zm1 17h-2v-6h2v6zm0-8h-2V7h2v5z" />
                                </svg>
                                <h1
                                    class="text-2xl mt-2 md:text-3xl font-semibold text-gray-800 dark:text-gray-800 group-hover:text-white">
                                    Layanan Cepat
                                </h1>
                                <p
                                    class="font-light md:font-thin mb-4 line-clamp-4 mt-4 md:line-clamp-none text-gray-800 group-hover:text-white dark:group-hover:text-gray-200">
                                    Proses pemesanan dan pengambilan barang yang mudah dan cepat, tanpa ribet.
                                </p>
                            </div>
                            <div
                                class="w-full md:w-1/4 flex flex-col justify-items-center shadow-md dark:shadow-lg border-b-4 border-emerald-600 dark:border-y group hover:bg-emerald-600 py-12 px-6 rounded-md transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                    class="text-emerald-600 group-hover:text-white" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 17c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7z" />
                                    <path d="M10 16.5l6-4.5-6-4.5z" />
                                </svg>
                                <h1
                                    class="text-2xl mt-2 md:text-3xl  font-semibold text-gray-800 dark:text-gray-800 group-hover:text-white">
                                    Beragam Pilihan
                                </h1>
                                <p
                                    class="font-light md:font-thin mb-4 line-clamp-4 mt-4 md:line-clamp-none text-gray-800 group-hover:text-white dark:group-hover:text-gray-200">
                                    Kami memiliki berbagai macam perlengkapan outdoor, mulai dari tenda, sleeping bag,
                                    carrier,
                                    hingga peralatan masak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>


    </main>
@endsection
