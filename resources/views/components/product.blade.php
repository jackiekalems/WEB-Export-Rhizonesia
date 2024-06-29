<section class="my-20 mx-14 lg:mx-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center my-10">
            <h1 class="font-primary">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                    CENTER</span>
            </h1>
        </div>
        <!--Slider Wrapper-->
        <div class="swiper teamswiper teamswiper1 pb-10">
            <div class="swiper-wrapper">
                <div class="swiper-slide border rounded-lg shadow-primary">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="http://127.0.0.1:8000/assets/jahe.jpg" alt="image"
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
                <div class="swiper-slide rounded-xl shadow-primary border">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="https://cdn.idntimes.com/content-images/post/20210704/2-191547-79cfa57446b7796d57461054434ba321.jpeg"
                                alt="image" class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
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
                            <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7"
                                alt="image" class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
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
                            <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png"
                                alt="image" class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                        </div>
                        <div class="text-center lg:text-left lg:max-w-xs flex-1">
                            <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                <h6 class="text-lg text-gray-900 font-semibold mb-1">Powder Tumeric</h6>
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
                <div class="swiper-slide border rounded-xl shadow-primary">
                    <div
                        class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                        <div class=" w-full lg:w-48 h-64">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png"
                                alt="image" class="rounded-2xl h-full border object-cover mx-auto lg:mx-0 lg:w-full">
                        </div>
                        <div class="text-center lg:text-left lg:max-w-xs flex-1">
                            <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                <h6 class="text-lg text-gray-900 font-semibold mb-1">Finger Tumeric</h6>
                                <span class="text-sm text-gray-500 group-hover:text-indigo-600">Vegetables</span>
                            </div>
                            <p class="text-gray-500 leading-6 mb-7">
                                350g Sweet Kernel Corn Cob with Vacuum Packed by New Crop from China Supplier
                            </p>
                            <div class="flex items-center gap-4 justify-center lg:justify-start">
                                <a href="{{ route('finger.tumeric') }}"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-shopping-cart-line text-xl text-green-600 hover:text-white"></i>
                                </a>
                                <button onclick="showProductDescription5()"
                                    class="cursor-pointer  text-gray-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-green-600">
                                    <i class="ri-eye-line text-xl text-green-600 hover:text-white"></i>
                                </button>
                                <button id="shareButton"
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
            <div style="padding: 20px;">
                <img src="assets/jahe.jpg" alt="Custom image" style="width: 100%; height: auto;">
                 <p style="margin-top: 20px;">Edit sesuka hati mu pak</p>
            </div>
        `,
            width: 600
        });
    }

    function showProductDescription2() {
        Swal.fire({
            title: "Wet Ginger!",
            html: `
            <div style="padding: 20px;">
                <img src="https://cdn.idntimes.com/content-images/post/20210704/2-191547-79cfa57446b7796d57461054434ba321.jpeg" alt="Custom image" style="width: 100%; height: auto;">
                 <p style="margin-top: 20px;">Edit sesuka hati mu pak</p>
            </div>
        `,
            width: 600
        });
    }

    function showProductDescription3() {
        Swal.fire({
            title: "Dried Tumeric!",
            html: `
            <div style="padding: 20px;">
                <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7" alt="Custom image" style="width: 100%; height: auto;">
                 <p style="margin-top: 20px;">Edit sesuka hati mu pak</p>
            </div>
        `,
            width: 600
        });
    }

    function showProductDescription4() {
        Swal.fire({
            title: "Powder Tumeric!",
            html: `
            <div style="padding: 20px;">
                <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png" alt="Custom image" style="width: 100%; height: auto;">
                 <p style="margin-top: 20px;">Edit sesuka hati mu pak</p>
            </div>
        `,
            width: 600
        });
    }

    function showProductDescription5() {
        Swal.fire({
            title: "Finger Tumeric!",
            html: `
            <div style="padding: 20px;">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png" alt="Custom image" style="width: 100%; height: auto;">
                 <p style="margin-top: 20px;">Edit sesuka hati mu pak</p>
            </div>
        `,
            width: 600
        });
    }
</script>
