@extends('layouts.app')

@section('products')
    <header class="relative w-full h-[50vh] bg-cover bg-bottom"
        style="background-image: url('https://img.freepik.com/free-photo/top-view-vegetables-as-coriander-tomato-spinach-green-mint-leaves-wooden-surface-with-copy-space_141793-10306.jpg?t=st=1718957010~exp=1718960610~hmac=3a91d448b35c6167540e8468589138608e6c392911c41e153bf89c630fec4b65&w=996');">
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
                    <span>Products</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    <div class="text-center mt-10">
        <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">
            <span class="text-green-600"> PRODUCTS</span>
        </h1>
        <hr class="my-4 h-1 w-[6%] bg-red-500 border-0 rounded-full mx-auto">
    </div>
    <section class="w-3/4 mx-auto flex flex-wrap justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-20">
        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <a href="{{ route('dried.ginger') }}">
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <div>
                    <img src="assets/jahe.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">Dried</span>
                        <p class="text-lg font-bold text-black truncate block capitalize">Dried Ginger</p>
                        <div class="flex items-center py-3">
                            <a href="{{ route('dried.ginger') }}"
                                class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <div>
                <img src="https://cdn.idntimes.com/content-images/post/20210704/2-191547-79cfa57446b7796d57461054434ba321.jpeg"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Dried</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">wet ginger</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('wet.ginger') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <div>
                <img src="https://down-id.img.susercontent.com/file/6b02eaeb65ba59e44f7b133254eedeb7" alt="Product"
                    class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('dried.turmeric') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <div>
                <img src="https://bahanmakanan.com/media/catalog/product/cache/b6e40821e7ad3dff893c85a1b82d0901/k/u/kunyit_bubuk.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Tumeric</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Powder Tumeric</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('tumeric.powder') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <div>
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/metrodaily/2021/08/HIDUP-SEHAT-Kunyit.png"
                    alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Tumeric</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Finger Tumeric</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('finger.tumeric') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script>
@endsection
