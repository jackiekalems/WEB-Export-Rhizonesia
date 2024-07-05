<section class="my-20 mx-14 lg:mx-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center my-10">
            <h1 class="font-primary title">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                    CENTER</span>
            </h1>
        </div>
        <!--Slider Wrapper-->
        <div class="swiper teamswiper teamswiper1 pb-10">
            <div class="swiper-wrapper">
                <div class="swiper-slide border rounded-lg shadow-primary leftAnimation">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="assets/DriedGinger/IMG_8794.jpg" alt="image"
                                class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                        </div>
                        <div class="text-center lg:text-left lg:max-w-xs flex-1">
                            <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                <h6 class="text-lg text-gray-900 font-semibold mb-1">Dried Ginger</h6>
                                <span class="text-sm text-gray-500 group-hover:text-indigo-600">Ginger</span>
                            </div>
                            <p class="text-gray-500 leading-6 mb-7">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi perspiciatis ex
                                molestias blanditiis quos.
                            </p>
                            <div class="flex items-center gap-4 justify-center lg:justify-start">
                                <a href="{{ route('dried.ginger') }}"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-shopping-cart-line text-xl text-green-600 hover:text-white"></i>
                                </a>
                                <button onclick="showProductDescription()"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-eye-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                                <button id="shareButton2"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-share-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide rounded-xl shadow-primary border rightAnimation">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="assets/FreshGinger/IMG_8803.jpg" alt="image"
                                class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                        </div>
                        <div class="text-center lg:text-left lg:max-w-xs flex-1">
                            <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                <h6 class="text-lg text-gray-900 font-semibold mb-1">Wet Ginger</h6>
                                <span class="text-sm text-gray-500 group-hover:text-indigo-600">Ginger</span>
                            </div>
                            <p class="text-gray-500 leading-6 mb-7">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci nisi eaque excepturi
                                nostrum totam?
                            </p>
                            <div class="flex items-center gap-4 justify-center lg:justify-start">
                                <a href="{{ route('wet.ginger') }}"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-shopping-cart-line text-xl text-green-600 hover:text-white"></i>
                                </a>
                                <button onclick="showProductDescription2()"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-eye-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                                <button id="shareButton3"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-share-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide border rounded-xl shadow-primary">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="assets/DriedTurmeric/IMG_8784.jpg" alt="image"
                                class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                        </div>
                        <div class="text-center lg:text-left lg:max-w-xs flex-1">
                            <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                <h6 class="text-lg text-gray-900 font-semibold mb-1">Dried Tumeric</h6>
                                <span class="text-sm text-gray-500 group-hover:text-indigo-600">Tumeric</span>
                            </div>
                            <p class="text-gray-500 leading-6 mb-7">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel debitis voluptate atque
                                architecto cupiditate?
                            </p>
                            <div class="flex items-center gap-4 justify-center lg:justify-start">
                                <a href="{{ route('dried.turmeric') }}"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-shopping-cart-line text-xl text-green-600 hover:text-white"></i>
                                </a>
                                <button onclick="showProductDescription3()"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-eye-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                                <button id="shareButton4"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-share-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide border rounded-xl shadow-primary">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="assets/TurmericPowder/IMG_8807.jpg" alt="image"
                                class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                        </div>
                        <div class="text-center lg:text-left lg:max-w-xs flex-1">
                            <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                <h6 class="text-lg text-gray-900 font-semibold mb-1">Tumeric Powder</h6>
                                <span class="text-sm text-gray-500 group-hover:text-indigo-600">Tumeric</span>
                            </div>
                            <p class="text-gray-500 leading-6 mb-7">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel debitis voluptate atque
                                architecto cupiditate?
                            </p>
                            <div class="flex items-center gap-4 justify-center lg:justify-start">
                                <a href="{{ route('tumeric.powder') }}"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-shopping-cart-line text-xl text-green-600 hover:text-white"></i>
                                </a>
                                <button onclick="showProductDescription4()"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-eye-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                                <button id="shareButton5"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-share-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="slider-button-left"
                class="swiper-button-prev p-2.5 group flex justify-center items-center text-gray-900 w-12 h-12 transition-all duration-500 rounded-full hover:text-indigo-600"
                data-carousel-prev>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                    fill="none">
                    <path d="M8.38413 15.1022L3.33301 10.0511M3.33301 10.0511L8.38413 5M3.33301 10.0511L18.3329 10.0511"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </button>
            <button id="slider-button-right"
                class="swiper-button-next p-2.5 group flex justify-center items-center text-gray-900 w-12 h-12 transition-all duration-500 rounded-full hover:text-indigo-600"
                data-carousel-next>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                    fill="none">
                    <path d="M11.6158 5L16.6669 10.0511M16.6669 10.0511L11.6158 15.1022M16.6669 10.0511L1.66699 10.0511"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>

            </button>
            <div class="swiper-pagination"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>
{{-- sweetalert --}}
<script>
    function showProductDescription() {
        Swal.fire({
            title: "Dried Ginger!",
            html: `
            <div style="padding: 20px; height: 400px; background: url('assets/DriedGinger/IMG_8794.jpg') no-repeat center center; background-size: cover;"></div>`,
            width: 600
        });
    }

    function showProductDescription2() {
        Swal.fire({
            title: "Fresh Ginger!",
            html: `
           <div style="padding: 20px; height: 300px; background: url('assets/FreshGinger/IMG_8803.jpg') no-repeat center center; background-size: cover;"></div>
           `,
            width: 600
        });
    }

    function showProductDescription3() {
        Swal.fire({
            title: "Dried Tumeric!",
            html: `
         <div style="padding: 20px; height: 300px; background: url('assets/DriedTurmeric/IMG_8784.jpg') no-repeat center center; background-size: cover;"></div>
         `,
            width: 600
        });
    }

    function showProductDescription4() {
        Swal.fire({
            title: "Powder Tumeric!",
            html: `
           <div style="padding: 20px; height: 300px; background: url('assets/TurmericPowder/IMG_8807.jpg') no-repeat center center; background-size: cover;"></div>
        `,
            width: 600
        });
    }
</script>
