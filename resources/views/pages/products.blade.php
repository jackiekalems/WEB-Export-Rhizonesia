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
    <div class="text-center mt-10 first">
        <h1 class="font-primary">
            <span
                class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCTS</span>
        </h1>
    </div>
    <section class="w-full mx-auto flex flex-wrap justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-20">
        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl seccond">
            <div>
                <img src="assets/DriedGinger/IMG_8794.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Ginger</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Dried Ginger</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('dried.ginger') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl third">
            <div>
                <img src="assets/FreshGinger/IMG_8803.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Ginger</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Fresh ginger</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('wet.ginger') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl fourth">
            <div>
                <img src="assets/DriedTurmeric/IMG_8784.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Turmeric</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Dried Turmeric</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('dried.turmeric') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl first">
            <div>
                <img src="assets/TurmericPowder/IMG_8807.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
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
    </section>
    <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script>
@endsection
