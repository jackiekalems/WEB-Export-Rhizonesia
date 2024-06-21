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
        </ul>
        <div class="w-full">
            <div x-show="openTab === 4" id="whyUs"> </div>
            <div x-show="openTab === 2" id="documentation"></div>
            <div x-show="openTab === 3" id="qualityControll"></div>
            <div x-show="openTab === 1" id="ourRescource">
                <section class="px-4 py-24 mx-auto max-w-7xl">
                    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                        <h1
                            class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
                            <span
                                class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">Here's
                                to the crazy ones</span>
                        </h1>
                    </div>
                </section>

                <section>
                    <div x-data="{
                        imageGalleryOpened: false,
                        imageGalleryActiveUrl: null,
                        imageGalleryImageIndex: null,
                        imageGalleryOpen(event) {
                            this.imageGalleryImageIndex = event.target.dataset.index;
                            this.imageGalleryActiveUrl = event.target.src;
                            this.imageGalleryOpened = true;
                        },
                        imageGalleryClose() {
                            this.imageGalleryOpened = false;
                            setTimeout(() => this.imageGalleryActiveUrl = null, 300);
                        },
                    }" class="w-full h-full select-none">
                        <div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view"
                            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 01"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.pexels.com/photos/3618162/pexels-photo-3618162.jpeg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 07"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.unsplash.com/photo-1689217634234-38efb49cb664?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 08"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.unsplash.com/photo-1520350094754-f0fdcac35c1c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 09"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://cdn.devdojo.com/images/june2023/mountains-10.jpeg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 10"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://cdn.devdojo.com/images/june2023/mountains-06.jpeg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 06"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.pexels.com/photos/1891234/pexels-photo-1891234.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 07"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1965&q=80"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 08"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.pexels.com/photos/4256852/pexels-photo-4256852.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 09"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://images.unsplash.com/photo-1541795083-1b160cf4f3d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 10"></li>
                            </ul>
                        </div>
                        <template x-teleport="body">
                            <div x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in-in duration-300"
                                x-transition:leave-end="opacity-0" @click="imageGalleryClose"
                                @keydown.window.escape="imageGalleryClose" x-trap.inert.noscroll="imageGalleryOpened"
                                class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out"
                                x-cloak>
                                <div class="relative flex flex-col items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                                    <img x-show="imageGalleryOpened"
                                        x-transition:enter="transition ease-in-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-50"
                                        x-transition:leave="transition ease-in-in duration-300"
                                        x-transition:leave-end="opacity-0 transform scale-50"
                                        class="object-contain object-center w-full h-full select-none cursor-zoom-out"
                                        :src="imageGalleryActiveUrl" alt="" style="display: none;">
                                </div>
                            </div>
                        </template>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
