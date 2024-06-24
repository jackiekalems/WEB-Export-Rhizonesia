@extends('layouts.app')

@section('qualityControl')
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
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <a href="" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Quality Control
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('documentation') }}"
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
            <div x-show="openTab === 3" id="whyUs"></div>
            <div x-show="openTab === 2" id="documentation"></div>
            <div x-show="openTab === 1" id="qualityControll">
                <div class="bg-white py-6 sm:py-8 lg:py-12">
                    <div class="text-center my-10">
                        <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">PROCESS
                            <span class="text-green-600"> PRODUCTION</span>
                        </h1>
                        <hr class="my-4 h-1 w-[10%] bg-red-500 border-0 rounded-full mx-auto">
                    </div>
                    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                                <img src="https://img.freepik.com/free-photo/young-woman-buys-ginger-market-woman-choose-ginger-supermarket-woman-picking-fresh-produce-market_1391-643.jpg?t=st=1719121730~exp=1719125330~hmac=ec65bd4d7db006e246cb472247c61e636b09be16dc6d87cf235995815d658307&w=996"
                                    loading="lazy" alt="Photo by Minh Pham"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                                <img src="https://img.freepik.com/free-photo/turmeric-powder_1323-403.jpg?t=st=1719122082~exp=1719125682~hmac=8e97f2dad2889d04e16a7c06428ba3d31afceccef7ce7a215f4934ebed4eea6e&w=996"
                                    loading="lazy" alt="Photo by Magicle"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                                <img src="https://img.freepik.com/free-photo/top-view-assorted-spices-small-bowls-with-wooden-spoons-grey-plaster-background-horizontal_176474-64226.jpg?t=st=1719122099~exp=1719125699~hmac=ee891d4865295adced1753feb2b5af918bb9a17936ac32d18b7b491cabbf0281&w=996"
                                    loading="lazy" alt="Photo by Martin Sanchez"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                                <img src="https://img.freepik.com/free-photo/top-view-assortment-tasty-food-ingredients_23-2148869956.jpg?t=st=1719122117~exp=1719125717~hmac=5d38a544e4d861cde87eacab851e845645cae9ac183c062886d0fe545379b3a1&w=360"
                                    loading="lazy" alt="Photo by Lorenzo Herrera"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                                <img src="https://img.freepik.com/free-photo/young-woman-buys-ginger-market-woman-choose-ginger-supermarket-woman-picking-fresh-produce-market_1391-643.jpg?t=st=1719121730~exp=1719125330~hmac=ec65bd4d7db006e246cb472247c61e636b09be16dc6d87cf235995815d658307&w=996"
                                    loading="lazy" alt="Photo by Minh Pham"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                                <img src="https://img.freepik.com/free-photo/turmeric-powder_1323-403.jpg?t=st=1719122082~exp=1719125682~hmac=8e97f2dad2889d04e16a7c06428ba3d31afceccef7ce7a215f4934ebed4eea6e&w=996"
                                    loading="lazy" alt="Photo by Magicle"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                                <img src="https://img.freepik.com/free-photo/top-view-assorted-spices-small-bowls-with-wooden-spoons-grey-plaster-background-horizontal_176474-64226.jpg?t=st=1719122099~exp=1719125699~hmac=ee891d4865295adced1753feb2b5af918bb9a17936ac32d18b7b491cabbf0281&w=996"
                                    loading="lazy" alt="Photo by Martin Sanchez"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->

                            <!-- image - start -->
                            <a href="#"
                                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                                <img src="https://img.freepik.com/free-photo/top-view-assortment-tasty-food-ingredients_23-2148869956.jpg?t=st=1719122117~exp=1719125717~hmac=5d38a544e4d861cde87eacab851e845645cae9ac183c062886d0fe545379b3a1&w=360"
                                    loading="lazy" alt="Photo by Lorenzo Herrera"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                                </div>

                                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">ISI
                                    DISINI</span>
                            </a>
                            <!-- image - end -->
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="openTab === 4" id="ourRescource"></div>
        </div>
    @endsection
