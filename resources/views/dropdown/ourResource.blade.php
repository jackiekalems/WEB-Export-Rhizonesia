@extends('layouts.app')

@section('ourResource')
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
        <ul class="flex border-b text-green-500">
            <li class="mr-1">
                <!-- Set active class by using :class provided by Alpine -->
                <a href="{{ route('about.us') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Why Us
                </a>
            </li>
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <!-- Set active class by using :class provided by Alpine -->
                <a href="#documentation" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Our Resource
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('process.production') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Process Production
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('documentation') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Documentation
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Guideline to Purchase
                </a>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1" class="mt-10">
                <!-- Content -->
                <div class="text-center my-10">
                    <h1 class="font-primary">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">OUR
                            RESOURCE
                        </span>
                    </h1>
                </div>
                <div class="relative w-full h-[100vh] bg-cover bg-center"
                    style="background-image: url('https://www.ll-foods.com/d/images/about/shijie.jpg');">
                    <!-- Overlay -->
                    <div class="absolute inset-0"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
