@extends('layouts.app')

@section('about')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[50vh] bg-cover bg-bottom"
        style="background-image: url('assets/Tampilan/Aboutus/image.PNG');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            {{-- <div class="text-center text-white first">
                <h1 class="text-4xl md:text-6xl font-bold">Welcome to Our Website</h1>
                <p class="text-lg md:text-xl mt-4">Discover amazing content below</p>
            </div> --}}
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
        inactiveClasses: 'text-green-500 hover:text-green-700 '
    }" class="p-6 flex flex-col items-center">
        <ul class="flex border-b text-green-500 seccond">
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="cursor-pointer bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
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
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Guideline to Purchase
                </a>
            </li>
        </ul>
        <section id="testimonies" class="py-20">
            <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">


                <div
                    class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
                    <div class="mb-12 space-y-5 md:mb-16 md:text-center third">
                        <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
                            <h1 class="font-primary">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">WHY
                                    US?</span>
                            </h1>
                            <p
                                class="mt-6 text-md text-gray-600 max-w-lg text-center text-2xl p-4 rounded-bl-2xl rounded-tr-2xl shadow-md animate-border">
                                <span class="font-bold text-green-500">CPR</span> "Your curt, precise, and reliable
                                partner!"
                            </p>
                            <style>
                                @keyframes borderGlow {
                                    0% {
                                        border-color: rgba(34, 197, 94, 0.1);
                                    }

                                    50% {
                                        border-color: rgba(34, 197, 94, 1);
                                    }

                                    100% {
                                        border-color: rgba(34, 197, 94, 0.1);
                                    }
                                }

                                .animate-border {
                                    border-width: 2px;
                                    border-style: solid;
                                    border-color: rgba(34, 197, 94, 0.1);
                                    animation: borderGlow 2s infinite;
                                }
                            </style>
                        </div>
                    </div>


                    <div class="flex flex-col gap-6 sm:flex-row sm:gap-6 lg:gap-8">
                        <div class="flex-none w-full sm:w-1/2 lg:w-1/3 h-56 first">
                            <div class="relative group h-full">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-600 to-yellow-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div>
                                <a href="https://twitter.com/paraga" class="cursor-pointer h-full">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5 h-full">
                                        <div class="flex items-center space-x-4">
                                            <div
                                                class="w-12 h-12 rounded-full bg-green-500 flex justify-center items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                    class="h-6 w-6 text-white">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <h3 class="text-lg font-semibold">Curt</h3>
                                        </div>
                                        <p class="leading-normal text-gray-800 text-md">
                                            Ability to offer the curtest preparation for your product.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="flex-none w-full sm:w-1/2 lg:w-1/3 h-56 seccond">
                            <div class="relative group h-full">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-600 to-yellow-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div>
                                <a href="https://twitter.com/paraga" class="cursor-pointer h-full">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5 h-full">
                                        <div class="flex items-center space-x-4">
                                            <div
                                                class="w-12 h-12 rounded-full bg-green-500 flex justify-center items-center">
                                                <i class="ri-timer-line text-white text-2xl"></i>
                                            </div>
                                            <h3 class="text-lg font-semibold">Precise</h3>
                                        </div>
                                        <p class="leading-normal text-gray-800 text-md">
                                            The precise place to get to know about the entire superior quality supply of
                                            spices
                                            from Indonesia.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="flex-none w-full sm:w-1/2 lg:w-1/3 h-56 third">
                            <div class="relative group h-full">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-green-600 to-yellow-400 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div>
                                <a href="https://twitter.com/paraga" class="cursor-pointer h-full">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-white ring-1 ring-gray-900/5 h-full">
                                        <div class="flex items-center space-x-4">
                                            <div
                                                class="w-12 h-12 rounded-full bg-green-500 flex justify-center items-center">
                                                <i class="ri-verified-badge-line text-white text-2xl"></i>
                                            </div>
                                            <h3 class="text-lg font-semibold">Reliable</h3>
                                        </div>
                                        <p class="leading-normal text-gray-800 text-md">
                                            Almea Kausa Eterna was reliable for your business and will be your forever
                                            partner
                                            in escalating the industry with great services consistently.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
        </section>
    @endsection
