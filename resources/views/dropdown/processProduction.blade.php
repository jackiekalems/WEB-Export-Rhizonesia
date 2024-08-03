@extends('layouts.app')

@section('processOrder')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[30vh] md:h-[50vh] bg-cover bg-bottom"
        style="background-image: url('assets/Tampilan/Aboutus/image.PNG');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        </div>
    </header>
    <div class="font-sans bg-white">
        <div class="py-6">
            <!-- Breadcrumbs -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400">
                    <a href="{{ route('welcome') }}" class="hover:underline hover:text-gray-600"><i
                            class="ri-home-4-fill text-lg text-green-500"></i> Home</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>About Us</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    <div x-data="{
        openTab: 1,
        activeClasses: 'border-l border-t border-r rounded-t text-green-700',
        inactiveClasses: 'text-green-500 hover:text-green-700'
    }" x-init="const hash = window.location.hash;
    if (hash === '#whyUs') {
        openTab = 1;
    } else if (hash === '#ourResource') {
        openTab = 2;
    } else if (hash === '#qualityControll') {
        openTab = 3;
    }
    } else if (hash === '#documentation') {
        openTab = 4;
    }
    activeClasses: 'border-l border-t border-r rounded-t text-green-700',
        inactiveClasses: 'text-green-500 hover:text-green-700'
    }" class="p-6 flex flex-col items-center">
        <ul class="flex border-b text-green-500">
            <li class="mr-1">
                <a href="{{ route('about.us') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Why Us
                </a>
                <a href="{{ route('about.us') }}"
                    class="bg-white flex items-center gap-x-2 py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-question-mark text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('our.resource') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Our Resource
                </a>
                <a href="{{ route('our.resource') }}"
                    class="bg-white flex items-center gap-x-2 py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-pin-distance-line text-xl"></i>
                </a>
            </li>
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <a href="" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Process Production
                </a>
                <a href="" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-hourglass-2-fill text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('documentation') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Documentation
                </a>
                <a href="{{ route('documentation') }}"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-camera-line text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Guideline to Purchase
                </a>
                <a href="{{ route('guide.line') }}"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-guide-line text-xl"></i>
                </a>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1" id="qualityControll">
                <div class="bg-white py-6 sm:py-8 lg:py-12">
                    <div class="text-center my-10 seccond">
                        <h1 class="font-primary">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700 uppercase">Dried
                                Turmeric
                            </span>
                        </h1>
                    </div>
                    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                            <a href="#"
                                class="group relative flex h-48 items-center justify-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 first"
                                style="position: relative;">
                                <!-- Div untuk angka di pojok kiri atas -->
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">1</span>
                                </div>

                                <!-- Gambar -->
                                <img src="https://asset.kompas.com/crops/821fvnwJtBGjmDVLM9dSD7dGr6k=/24x10:904x597/750x500/data/photo/2023/07/14/64b11f9342d7b.jpg"
                                    loading="lazy" alt="Photo by Minh Pham"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <!-- Efek gradient -->
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <!-- Teks di tengah -->
                                <span class="text-shadow">Harvesting</span>
                            </a>


                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 seccond">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">2</span>
                                </div>
                                <img src="assets/DriedTurmericProduction/cleaning.jpg" loading="lazy" alt="Photo by Magicle"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Cleaning Up</span>
                                </div>
                            </a>

                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 first">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">3</span>
                                </div>
                                <img src="assets/DriedTurmericProduction/cutting.jpg" loading="lazy"
                                    alt="Photo by Martin Sanchez"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Cutting</span>
                                </div>
                            </a>

                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 seccond">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">4</span>
                                </div>
                                <img src="assets/DriedTurmericProduction/drying.jpg" loading="lazy"
                                    alt="Photo by Lorenzo Herrera"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Drying Out</span>
                                </div>
                            </a>

                            <!-- image - end -->
                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-center justify-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 first">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">5</span>
                                </div>
                                <img src="assets/DriedTurmericProduction/sifting.jpg" loading="lazy"
                                    alt="Photo by Minh Pham"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Sifting</span>
                                </div>
                            </a>

                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 seccond">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">6</span>
                                </div>
                                <img src="assets/DriedTurmericProduction/packing.png" loading="lazy"
                                    alt="Photo by Magicle"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Finishing (Packing &
                                        Stuffing)</span>
                                </div>
                            </a>

                            <!-- image - end -->
                        </div>
                    </div>
                </div>
                <div class="bg-white py-6 sm:py-8 lg:py-12">
                    <div class="text-center my-10">
                        <h1 class="font-primary">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700 uppercase title">Fresh
                                Ginger
                            </span>
                        </h1>
                    </div>
                    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                            <a href="#"
                                class="group relative flex h-48 items-center justify-center overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 first"
                                style="position: relative;">
                                <!-- Div untuk angka di pojok kiri atas -->
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">1</span>
                                </div>

                                <!-- Gambar -->
                                <img src="assets/DriedTurmericProduction/harvest.jpg" loading="lazy"
                                    alt="Photo by Minh Pham"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <!-- Efek gradient -->
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <!-- Teks di tengah -->
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Harvesting</span>
                                </div>
                            </a>


                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 seccond">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">2</span>
                                </div>
                                <img src="assets/FreshGingerProduction/cleaning.jpg" loading="lazy"
                                    alt="Photo by Magicle"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Cleaning Up</span>
                                </div>
                            </a>

                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80 first">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">3</span>
                                </div>
                                <img src="assets/FreshGingerProduction/drying.jpg" loading="lazy"
                                    alt="Photo by Martin Sanchez"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Drying Out</span>
                                </div>
                            </a>

                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80 seccond">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">4</span>
                                </div>
                                <img src="assets/FreshGingerProduction/grading.jpg" loading="lazy"
                                    alt="Photo by Lorenzo Herrera"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Grading</span>
                                </div>
                            </a>

                            <!-- image - end -->
                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-center justify-center overflow-hidden rounded-lg bg-gray-100 col-span-2 md:col-span-3 shadow-lg md:h-96 first">
                                <div
                                    class="absolute top-3 left-3 text-white bg-green-500 border border-white rounded-full w-7 h-7 md:w-10 md:h-10 flex items-center justify-center z-40">
                                    <span class="text-xs md:text-sm font-bold">5</span>
                                </div>
                                <img src="assets/FreshGingerProduction/packing.png" loading="lazy"
                                    alt="Photo by Minh Pham"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>
                                <div class="relative flex items-center justify-center w-full h-full">
                                    <span class="text-shadow">Finishing (Packing &
                                        Stuffing)</span>
                                </div>
                            </a>

                            <!-- image - end -->
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="openTab === 4" id="ourRescource"></div>
        </div>
    @endsection
