@extends('layouts.app')

@section('guideLine')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[50vh] bg-cover bg-bottom"
        style="background-image: url('assets/Tampilan/Aboutus/image.PNG');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
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
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Why Us
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('our.resource') }}"
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
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <a href="" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Guideline to Purchase
                </a>
            </li>
        </ul>



        <div class="w-full">
            <div x-show="openTab === 1">
                <div class="text-center my-10 third">
                    <h1 class="font-primary">GUIDELINE
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">TO
                            PURCHASE
                        </span>
                    </h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 p-4 gap-3">
                    <div class="relative h-[80vh] first">
                        <img src="https://img.freepik.com/free-photo/business-people-meeting_1421-559.jpg?t=st=1719128043~exp=1719131643~hmac=3da6709cd4e547aa2a1e4950044b5e06a81501688f3b3d6d8ebba6de0e8e33c8&w=996"
                            alt="Image 1" class="object-cover w-full h-full grayscale rounded-xl">
                        <div
                            class="absolute inset-0 flex items-start justify-center text-center text-white bg-black bg-opacity-50 rounded-xl">
                            <div class="mt-20">
                                <h2 class="text-4xl font-bold mb-2 text-green-500">Sign detail Order</h2>
                                <p class="text-lg px-10">Make sure your detail order are completely filled.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Gambar 2 -->
                    <div class="relative h-[80vh] seccond">
                        <img src="https://img.freepik.com/free-photo/closeup-hands-holding-cash_53876-144221.jpg?t=st=1719128076~exp=1719131676~hmac=bb52eeebf05a4d508d765ec7a86641ac26bd4e7621f6ab678f5939e29ae9ae65&w=996"
                            alt="Image 2" class="object-cover w-full h-full grayscale rounded-xl">
                        <div
                            class="absolute inset-0 flex items-end justify-center text-center text-white bg-black bg-opacity-50 rounded-xl">
                            <div class="mb-20">
                                <h2 class="text-4xl font-bold mb-2 text-green-500">Payment</h2>
                                <p class="text-lg px-10">Advanced Payment is 40% after signing a sales contract, 20% before
                                    the product is delivered to the international port, and 40% for receiving the copy of
                                    the Bill of Lading.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar 3 -->
                    <div class="relative h-[80vh] third">
                        <img src="assets/Gudang/image.DNG" alt="Image 3"
                            class="object-cover w-full h-full grayscale rounded-xl">
                        <div
                            class="absolute inset-0 flex items-start justify-center text-center text-white bg-black bg-opacity-50 rounded-xl">
                            <div class="mt-20">
                                <h2 class="text-4xl font-bold mb-2 text-green-500">Order Preparation</h2>
                                <p class="text-lg px-10">The time take to preparing your order is less then 2 weeks.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar 4 -->
                    <div class="relative h-[80vh] fourth">
                        <img src="https://img.freepik.com/free-photo/logistics-transportation-container-cargo-ship-cargo-plane-with-working-crane-bridge-shipyard-sunrise-logistic-import-export-transport-industry-background-ai-generative_123827-24177.jpg?t=st=1719128257~exp=1719131857~hmac=a2bc183d463daed6547d83e1a989f745755a9bb8df6b695f13181d5595f9a683&w=996"
                            alt="Image 4" class="object-cover w-full h-full grayscale rounded-xl">
                        <div
                            class="absolute inset-0 flex items-end justify-center text-center text-white bg-black bg-opacity-50 rounded-xl">
                            <div class="mb-20">
                                <h2 class="text-4xl font-bold mb-2 text-green-500">Shipment</h2>
                                <p class="text-lg px-10">The product will deliver in accordance with the location assigned.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
