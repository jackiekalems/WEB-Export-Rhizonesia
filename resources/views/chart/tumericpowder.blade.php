@extends('layouts.app')

@section('tumericpowder')
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
                    <a href="{{ route('products') }}" class="hover:underline hover:text-gray-600">Products</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Turmeric Powder</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
        <div class="p-4 lg:max-w-7xl max-w-4xl mx-auto">
            <div
                class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6 rounded-lg">
                <div class="lg:col-span-3 w-full lg:sticky top-0 text-center">

                    <div class="md:flex-1 px-4">
                        <div x-data="{ image: 1 }" x-cloak>
                            <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                                <img src="https://img.freepik.com/free-photo/assortment-ginger-wooden-board_23-2148799547.jpg?t=st=1718901317~exp=1718904917~hmac=cdd42a626f7731f8df4af38dfa707894e1d0ffd4c37e6ed556b58c5bb34c811c&w=996"
                                    x-show="image === 1"
                                    class="h-64 w-full md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>

                                <img src="https://img.freepik.com/free-photo/top-view-unpeeled-garlic-ginger-with-pasta-spaghetti-form-decor_140725-14075.jpg?t=st=1718902878~exp=1718906478~hmac=92aff9947625bc9fc79a97053a103c68c467c3a1df31345ce5d48df328478a83&w=996"
                                    x-show="image === 2"
                                    class="h-64 w-full md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>

                                <img src="https://img.freepik.com/free-photo/fresh-ginger-root_144627-34531.jpg?t=st=1718902978~exp=1718906578~hmac=575dd8563c74b43286ac410bcf2670c96b3e4fca0f49bca85b110286a2553fab&w=1060"
                                    x-show="image === 3"
                                    class="h-64 w-full md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>

                                <img src="https://img.freepik.com/free-photo/arrangement-ginger-table_23-2148799550.jpg?t=st=1718903043~exp=1718906643~hmac=1436a1c668ccae3f0855944b5dcaad2f60ea6b624088d3cad2a036934f4538d1&w=1380"
                                    x-show="image === 4"
                                    class="h-64 w-full md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>
                            </div>

                            <div class="flex -mx-2 mb-4">
                                <template x-for="i in 4">
                                    <div class="flex-1 px-2">
                                        <button x-on:click="image = i"
                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                            class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                            <img :src="[
                                                'https://img.freepik.com/free-photo/assortment-ginger-wooden-board_23-2148799547.jpg?t=st=1718901317~exp=1718904917~hmac=cdd42a626f7731f8df4af38dfa707894e1d0ffd4c37e6ed556b58c5bb34c811c&w=996',
                                                'https://img.freepik.com/free-photo/top-view-unpeeled-garlic-ginger-with-pasta-spaghetti-form-decor_140725-14075.jpg?t=st=1718902878~exp=1718906478~hmac=92aff9947625bc9fc79a97053a103c68c467c3a1df31345ce5d48df328478a83&w=996',
                                                'https://img.freepik.com/free-photo/fresh-ginger-root_144627-34531.jpg?t=st=1718902978~exp=1718906578~hmac=575dd8563c74b43286ac410bcf2670c96b3e4fca0f49bca85b110286a2553fab&w=1060',
                                                'https://img.freepik.com/free-photo/arrangement-ginger-table_23-2148799550.jpg?t=st=1718903043~exp=1718906643~hmac=1436a1c668ccae3f0855944b5dcaad2f60ea6b624088d3cad2a036934f4538d1&w=1380'
                                            ][i - 1]"
                                                class="h-20 w-20 rounded-lg object-cover">
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <h2
                        class="text-2xl block antialiased tracking-normal font-sans font-bold leading-snug text-inherit mb-6 text-gray-800">
                        High Quality Fresh Ginger Market Price Per Ton Of
                        Wholesale Ginger China Ginger Export | Turmeric Powder </h2>

                    <div class="flex flex-wrap gap-4 mt-8">
                        <div>
                            <div class="md:text-start text-center">
                                <h5
                                    class="block antialiased tracking-normal font-sans text-sm font-semibold leading-snug text-inherit mb-6">
                                    Packing: 10kg/20kg mesh bag; 5kg/9kg/10kg/12kg/carton; 1kg/1LB x 30bag /carton; or
                                    according to the
                                    customers' requirements
                                </h5>
                                <div class="border-t border-dashed-small w-full my-2"></div>
                            </div>
                            <p
                                class="block antialiased font-sans leading-relaxed text-inherit !mt-4 text-base font-normal !text-gray-500">
                                <strong>Variety:</strong> Fresh Ginger & Air Dried Ginger
                            <div class="border-t border-dashed-small w-full my-2"></div>
                            </p>
                            <p
                                class="block antialiased font-sans leading-relaxed text-inherit !mt-4 text-base font-normal !text-gray-500">
                                <strong>Other products:</strong> Fresh garlic, onion, carrot, apple, fresh pomelo, China
                                chestnut
                            <div class="border-t border-dashed-small w-full my-2"></div>
                            </p>
                            <p
                                class="block antialiased font-sans leading-relaxed text-inherit !mt-4 text-base font-normal !text-gray-500">
                                <strong>Variety:</strong> Fresh Ginger & Air Dried Ginger
                            <div class="border-t border-dashed-small w-full my-2"></div>
                            </p>
                            <div class="mb-4 my-10 flex w-full items-center gap-3 md:w-1/2">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-52"
                                    type="button" data-ripple-light="true">
                                    BUY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
                <h3 class="text-xl font-bold text-gray-800">Product information</h3>
                <ul class="mt-4 space-y-6 text-gray-800">
                    <li class="text-sm">Nama <span class="ml-4 float-right">Dried Tumeric slice</span></li>
                    <li class="text-sm">Proses Pengeringan <span class="ml-4 float-right">di jemur</span></li>
                    <li class="text-sm">Bentuk <span class="ml-4 float-right">chips</span></li>
                    <li class="text-sm">Ketebalan irisan <span class="ml-4 float-right">-</span></li>
                    <li class="text-sm">Ayakan <span class="ml-4 float-right">0.4</span></li>
                    <li class="text-sm">Warna <span class="ml-4 float-right">kuning kecolatakan</span></li>
                    <li class="text-sm">Kotoran asing <span class="ml-4 float-right">
                            < 5% </span>
                    </li>
                    <li class="text-sm">Kadar air <span class="ml-4 float-right">OLED, TOUCHSCREEN, 120 Hz</span></li>
                    <li class="text-sm">Dokumen/sertifikasi <span class="ml-4 float-right">-</span></li>
                    <li class="text-sm">Packaging <span class="ml-4 float-right">-</span></li>
                </ul>
            </div>

            {{-- <div class="mt-16 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
            <h3 class="text-xl font-bold text-gray-800">Reviews(10)</h3>
            <div class="grid md:grid-cols-2 gap-12 mt-4">
                <div class="space-y-3">
                    <div class="flex items-center">
                        <p class="text-sm text-gray-800 font-bold">5.0</p>
                        <svg class="w-5 fill-blue-600 ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-2/3 h-full rounded bg-blue-600"></div>
                        </div>
                        <p class="text-sm text-gray-800 font-bold ml-3">66%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-gray-800 font-bold">4.0</p>
                        <svg class="w-5 fill-blue-600 ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-1/3 h-full rounded bg-blue-600"></div>
                        </div>
                        <p class="text-sm text-gray-800 font-bold ml-3">33%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-gray-800 font-bold">3.0</p>
                        <svg class="w-5 fill-blue-600 ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-1/6 h-full rounded bg-blue-600"></div>
                        </div>
                        <p class="text-sm text-gray-800 font-bold ml-3">16%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-gray-800 font-bold">2.0</p>
                        <svg class="w-5 fill-blue-600 ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-1/12 h-full rounded bg-blue-600"></div>
                        </div>
                        <p class="text-sm text-gray-800 font-bold ml-3">8%</p>
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm text-gray-800 font-bold">1.0</p>
                        <svg class="w-5 fill-blue-600 ml-1" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <div class="bg-gray-400 rounded w-full h-2 ml-3">
                            <div class="w-[6%] h-full rounded bg-blue-600"></div>
                        </div>
                        <p class="text-sm text-gray-800 font-bold ml-3">6%</p>
                    </div>
                </div>

                <div>
                    <div class="flex items-start">
                        <img src="https://readymadeui.com/team-2.webp"
                            class="w-12 h-12 rounded-full border-2 border-white" />
                        <div class="ml-3">
                            <h4 class="text-sm font-bold text-gray-800">John Doe</h4>
                            <div class="flex space-x-1 mt-1">
                                <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-4 fill-blue-600" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-4 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <p class="text-xs !ml-2 font-semibold text-gray-800">2 mins ago</p>
                            </div>
                            <p class="text-sm mt-4 text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisci
                                elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <button type="button"
                        class="w-full mt-10 px-4 py-2.5 bg-transparent hover:bg-gray-50 border border-blue-600 text-gray-800 font-bold rounded">Read
                        all reviews</button>
                </div>
            </div>
        </div> --}}
        </div>
    </div>
    <div class="text-center mt-10">
        <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">RELATED
            <span class="text-green-600"> PRODUCTS</span>
        </h1>
        <hr class="my-4 h-1 w-[10%] bg-red-500 border-0 rounded-full mx-auto">
    </div>
    <section
        class="w-3/4 mx-auto flex flex-wrap justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-20 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6 rounded-lg">
        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <a href="{{ route('dried.ginger') }}">
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <div>
                    <img src="assets/jahe.jpg" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                    <div class="px-4 py-3 w-72">
                        <span class="text-gray-400 mr-3 uppercase text-xs">GINGER</span>
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
                    <span class="text-gray-400 mr-3 uppercase text-xs">GINGER</span>
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
                    <span class="text-gray-400 mr-3 uppercase text-xs">turmeric</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Dried Turmeric</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('dried.turmeric') }}"
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
                    <span class="text-gray-400 mr-3 uppercase text-xs">TURMERIC</span>
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
