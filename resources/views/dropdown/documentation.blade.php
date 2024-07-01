@extends('layouts.app')

@section('documentation')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[50vh] bg-cover bg-center"
        style="background-image: url('https://img.freepik.com/free-photo/assortment-ginger-wooden-board_23-2148799547.jpg?t=st=1718760428~exp=1718764028~hmac=449ff52d92d09d31c183f06da50942f6fe221dedf4738c6e3fdff8e928d0c19d&w=996');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white first">
                <h1 class="text-4xl md:text-6xl font-bold">Welcome to Our Website</h1>
                <p class="text-lg md:text-xl mt-4">Discover amazing content below</p>
            </div>
        </div>
    </header>
    <div class="font-sans bg-white">
        <div class="py-6">
            <!-- Breadcrumbs -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
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
        <ul class="flex border-b text-green-500 seccond">
            <li class="mr-1">
                <a href="{{ route('about.us') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Why Us
                </a>
                <a href="{{ route('about.us') }}"
                    class="bg-white flex items-center gap-x-2 py-2 px-4 text-[11px] lg:text-base md:hidden"
                    x-data="{ show: false }" @mouseover="show = true" @mouseleave="show = false">
                    <i class="ri-question-mark text-xl"></i>
                    <span x-show="show">WHY US</span>
                </a>

            </li>
            <li class="mr-1">
                <a href="{{ route('our.resource') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Our Resource
                </a>
                <a href="{{ route('our.resource') }}"
                    class="bg-white flex items-center gap-x-2 py-2 px-4 text-[11px] lg:text-base md:hidden"
                    x-data="{ show: false }" @mouseover="show = true" @mouseleave="show = false">
                    <i class="ri-pin-distance-line text-xl"></i>
                    <span x-show="show">WHY US</span>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('process.production') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Process Production
                </a>
                <a href="{{ route('our.resource') }}"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-hourglass-2-fill text-xl"></i>
                </a>
            </li>
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <a href="{{ route('documentation') }}" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Documentation
                </a>
                <a href="{{ route('documentation') }}" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-camera-line text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Guideline to Purchase
                </a>
                <a href="{{ route('our.resource') }}"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-guide-line text-xl"></i>
                </a>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1">
                <section class="my-20 mx-14 lg:mx-20">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="text-center my-10 third">
                            <h1 class="font-primary">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                                </span>
                            </h1>
                        </div>
                        <!--Slider Wrapper-->
                        <div class="swiper teamswiper teamswiper2 pb-10 first">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500  lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="http://127.0.0.1:8000/assets/jahe.jpg" alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl shadow-xl border">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://cdn.idntimes.com/content-images/post/20210704/2-191547-79cfa57446b7796d57461054434ba321.jpeg"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="slider-button-left"
                                class="swiper-button-prev p-2.5 group flex justify-center items-center text-gray-900 w-12 h-12 transition-all duration-500 rounded-full hover:text-indigo-600"
                                data-carousel-prev>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M8.38413 15.1022L3.33301 10.0511M3.33301 10.0511L8.38413 5M3.33301 10.0511L18.3329 10.0511"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </button>
                            <button id="slider-button-right"
                                class="swiper-button-next p-2.5 group flex justify-center items-center text-gray-900 w-12 h-12 transition-all duration-500 rounded-full hover:text-indigo-600"
                                data-carousel-next>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M11.6158 5L16.6669 10.0511M16.6669 10.0511L11.6158 15.1022M16.6669 10.0511L1.66699 10.0511"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                </svg>

                            </button>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-scrollbar hidden md:block"></div>
                        </div>
                    </div>
                </section>
                <section class="my-20 mx-14 lg:mx-20">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="text-center my-10 first">
                            <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">WAREHOUSE
                                </span>
                            </h1>
                        </div>
                        <!--Slider Wrapper-->
                        <div class="swiper teamswiper teamswiper2 pb-10 seccond">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500  lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="http://127.0.0.1:8000/assets/jahe.jpg" alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded-xl shadow-xl border">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://cdn.idntimes.com/content-images/post/20210704/2-191547-79cfa57446b7796d57461054434ba321.jpeg"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide border rounded-xl shadow-xl">
                                    <div
                                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 lg:flex-nowrap">
                                        <div class=" w-full h-96">
                                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png"
                                                alt="image"
                                                class="rounded-xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="slider-button-left"
                                class="swiper-button-prev p-2.5 group flex justify-center items-center text-gray-900 w-12 h-12 transition-all duration-500 rounded-full hover:text-indigo-600"
                                data-carousel-prev>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M8.38413 15.1022L3.33301 10.0511M3.33301 10.0511L8.38413 5M3.33301 10.0511L18.3329 10.0511"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button id="slider-button-right"
                                class="swiper-button-next p-2.5 group flex justify-center items-center text-gray-900 w-12 h-12 transition-all duration-500 rounded-full hover:text-indigo-600"
                                data-carousel-next>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M11.6158 5L16.6669 10.0511M16.6669 10.0511L11.6158 15.1022M16.6669 10.0511L1.66699 10.0511"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                </svg>

                            </button>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-scrollbar hidden md:block"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
