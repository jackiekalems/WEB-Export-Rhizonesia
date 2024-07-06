@extends('layouts.app')

@section('ginger')
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
                    <span>Dried Ginger</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
        <div class="p-4 lg:max-w-7xl max-w-4xl mx-auto">
            <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12 border shadow-primary p-6 rounded-lg">
                <div class="lg:col-span-3 w-full lg:sticky top-0 text-center">

                    <div class="md:flex-1 px-4 border rounded-lg drop-shadow-xl shadow-primary">
                        <div x-data="{ image: 1 }" x-cloak>
                            <div class="h-64 md:h-96 rounded-lg bg-gray-100 my-4">
                                <img src="assets/DriedGinger/IMG_8794.jpg" x-show="image === 1"
                                    class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>

                                <img src="assets/DriedGinger/IMG_8792.jpg" x-show="image === 2"
                                    class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>

                                <img src="assets/DriedGinger/IMG_8788.jpg" x-show="image === 3"
                                    class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>

                                <img src="assets/DriedGinger/IMG_8796.jpg" x-show="image === 4"
                                    class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>
                            </div>

                            <div class="flex -mx-2 mb-4 p-3">
                                <template x-for="i in 4">
                                    <div class="flex-1 px-2">
                                        <button x-on:click="image = i"
                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                            class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center overflow-hidden transform transition-transform duration-300 hover:scale-105">
                                            <img :src="[
                                                'assets/DriedGinger/IMG_8794.jpg',
                                                'assets/DriedGinger/IMG_8792.jpg',
                                                'assets/DriedGinger/IMG_8788.jpg',
                                                'assets/DriedGinger/IMG_8796.jpg'
                                            ][i - 1]"
                                                class="h-full w-full object-cover rounded-lg">
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2 border p-5 rounded-lg shadow-primary">
                    <h2
                        class="text-2xl block antialiased tracking-normal font-sans font-bold leading-snug text-inherit mb-6 text-gray-800">
                        Export Quality Dried Ginger from the Land of Indonesia
                        | Dried Ginger</h2>

                    <div class="flex flex-wrap gap-4 mt-8">
                        <div>
                            <div class="md:text-start text-center">
                                <h5
                                    class="block antialiased tracking-normal font-sans text-sm font-semibold leading-snug text-inherit mb-6">
                                    Available in the best quality and according to customers' requirement
                                </h5>
                            </div>
                            <div class="bg-gradient-to-br from-pink-50 to-indigo-100 grid place-items-center rounded-lg shadow-primary"
                                x-data>
                                <div class="w-full mx-auto">
                                    <div class="bg-white p-4 shadow-sm">
                                        <div class="transition" x-data="{ open: false }">
                                            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16"
                                                @click="open = !open">
                                                <i :class="open ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                                <h3>Spesification?</h3>
                                            </div>
                                            <div class="accordion-content pt-0 overflow-hidden" x-show="open"
                                                :style="open ? 'max-height: 500px; padding-top: 1rem;' : ''">
                                                <div class="flex flex-col justify-center antialiased p-4">
                                                    <div class="h-full">
                                                        <!-- Table -->
                                                        <div class="w-full mx-auto bg-white">

                                                            <div class="overflow-x-auto">
                                                                <table class="table-auto w-full">
                                                                    <thead
                                                                        class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                                                        <tr>
                                                                            <th class="p-2 whitespace-nowrap">
                                                                                <div class="font-semibold text-left">
                                                                                    Detail</div>
                                                                            </th>
                                                                            <th class="p-2 whitespace-nowrap">
                                                                                <div class="font-semibold text-left">
                                                                                    Spesification</div>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="text-sm divide-y divide-gray-100">
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Name </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    Dried Ginger</div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Moisture Content</div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    < 12 %</div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Ash Amount</div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    < 8.0 %</div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Atsiri Oil </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    > 1.5 %</div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Admixture </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    < 2 %</div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Foreign Stuff </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    0 %</div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="flex items-center">
                                                                                    <div class="font-medium text-gray-800">
                                                                                        Standardization </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="p-2 whitespace-nowrap">
                                                                                <div class="text-left">
                                                                                    Fumigated & Quarantine Inspected
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="transition" x-data="{ open: false }">
                                            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16"
                                                @click="open = !open">
                                                <i :class="open ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                                <h3>Packing?</h3>
                                            </div>
                                            <div class="accordion-content px-5 pt-0 overflow-hidden" x-show="open"
                                                :style="open ? 'max-height: 500px; padding-top: 1rem;' : ''">
                                                <ul class="list-disc pl-9 text-justify">
                                                    <li>Polypropylene Bag</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="transition" x-data="{ open: false }">
                                            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16"
                                                @click="open = !open">
                                                <i :class="open ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                                <h3>Port?</h3>
                                            </div>
                                            <div class="accordion-content px-5 pt-0 overflow-hidden" x-show="open"
                                                :style="open ? 'max-height: 500px; padding-top: 1rem;' : ''">
                                                <ul class="list-disc pl-9 text-justify">
                                                    <li>Tanjung Perak, Surabaya</li>
                                                    <li>Tanjung Priok, Jakarta</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 my-10 flex w-full items-center gap-3">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full"
                                    type="button" data-ripple-light="true">
                                    BUY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-10 title">
        <h1 class="font-primary">
            <span
                class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">RELATED PRODUCTS
            </span>
        </h1>
    </div>
    {{-- products --}}
    <div
        class="lg:max-w-7xl max-w-4xl mx-auto flex flex-wrap justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-20 border shadow-primary p-4 rounded-lg">
        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
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
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <div>
                <img src="assets/DriedTurmeric/IMG_8784.jpg" alt="Product"
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
        <div class="w-72 bg-white shadow-primary rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <div>
                <img src="assets/TurmericPowder/IMG_8807.jpg" alt="Product"
                    class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Tumeric</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Tumeric Powder</p>
                    <div class="flex items-center py-3">
                        <a href="{{ route('tumeric.powder') }}"
                            class="bg-green-400 hover:bg-green-500 text-white w-full text-center py-2 rounded-lg">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://storage.ko-fi.com/cdn/scripts/overlay-widget.js"></script>
@endsection
