@extends('layouts.app')

@section('documentation')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[50vh] bg-cover bg-center"
        style="background-image: url('https://img.freepik.com/free-photo/assortment-ginger-wooden-board_23-2148799547.jpg?t=st=1718760428~exp=1718764028~hmac=449ff52d92d09d31c183f06da50942f6fe221dedf4738c6e3fdff8e928d0c19d&w=996');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold">Welcome to Our Website</h1>
                <p class="text-lg md:text-xl mt-4">Discover amazing content below</p>
            </div>
        </div>
    </header>
    <div class="flex gap-x-3 mx-5 py-5">
        <p><i class="ri-home-4-fill text-green-400"></i><span> Your Posistion in :</span></p>
        <ul class="flex flex-row">
            <li><a href="{{ route('welcome') }}">Home ></a></li>
            <li><a href="">About Us</a></li>
        </ul>
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
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Why Us
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('our.resource') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Our Resource
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('quality.control') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Quality Control
                </a>
            </li>
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <a href="#ourResource" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Documentation
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Guideline to Purchase
                </a>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 4" id="whyUs"> </div>
            <div x-show="openTab === 2" id="documentation"></div>
            <div x-show="openTab === 3" id="qualityControll"></div>
            <div x-show="openTab === 1" id="ourRescource">
                <section class="my-20 mx-14 lg:mx-20">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="text-center my-10">
                            <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">
                                DOCUMENTATION
                            </h1>
                            <hr class="my-4 h-1 w-[10%] bg-red-500 border-0 rounded-full mx-auto">
                        </div>
                        <!--Slider Wrapper-->
                        <div class="swiper teamswiper teamswiper2 pb-10">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
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
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
