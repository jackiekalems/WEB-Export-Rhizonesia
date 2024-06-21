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
                <a href="#qualityControll" :class="openTab === 1 ? activeClasses : inactiveClasses"
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
        </ul>
        <div class="w-full">
            <div x-show="openTab === 3" id="whyUs"></div>
            <div x-show="openTab === 2" id="documentation"></div>
            <div x-show="openTab === 1" id="qualityControll">
                <div class="text-center my-10">
                    <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">QUALITY
                        <span class="text-green-600"> CONTROL</span>
                    </h1>
                    <hr class="my-4 h-1 w-[10%] bg-red-500 border-0 rounded-full mx-auto">
                </div>

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
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0001.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 01"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0002.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 07"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0003.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 08"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0004.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 09"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0005.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 10"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0006.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 06"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0007.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 07"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0008.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 08"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/0009.jpg"
                                        class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                        alt="photo gallery image 09"></li>
                                <li><img x-on:click="imageGalleryOpen"
                                        src="https://www.ll-foods.com/d/images/about/zhengshu/00010.jpg"
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
            <div x-show="openTab === 4" id="ourRescource"></div>
        </div>
    @endsection
