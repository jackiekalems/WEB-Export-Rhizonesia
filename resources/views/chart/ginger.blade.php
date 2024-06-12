@extends('layouts.app')

@section('ginger')
    <section class="py-16 px-8 border container mx-auto bg-slate-50 rounded-lg">
        <div class="mx-auto container grid place-items-center grid-cols-1 md:grid-cols-2">
            <img src="https://cdn.idntimes.com/content-images/post/20210704/2-191547-79cfa57446b7796d57461054434ba321.jpeg"
                alt="jahe" class="h-[20rem] lg:h-[24rem] rounded-lg" />
            <div>
                <div class="md:text-start text-center">
                    <h3
                        class="block antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-inherit mb-4">
                        Dried Ginger
                    </h3>
                    <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-inherit">
                        Lorem ipsum dolor sit amet.
                    </h5>
                </div>
                <p
                    class="block antialiased font-sans text-base font-light leading-relaxed text-inherit !mt-4 text-base font-normal leading-[27px] !text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, quae voluptatibus corporis ipsa quam
                    autem harum deleniti eius necessitatibus rem. Nisi, ex. Ducimus illum itaque neque, beatae ullam
                    perferendis nulla!
                </p>
                <div class="mb-4 my-10 flex w-full items-center gap-3 md:w-1/2">
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-orange-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-52"
                        type="button" data-ripple-light="true">
                        Add to Cart</button>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-52"
                        type="button" data-ripple-light="true">
                        Add to Cart</button>
                    <button
                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20 shrink-0"
                        type="button" data-ripple-dark="true">
                        <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                                </path>
                            </svg></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-slate-100 m-10 lg:m-20 border rounded-lg">
        <div class="w-32 bg-white p-4 border-t-2 border-b-0 border-l-0 border rounded-l-lg border-t-green-400">
            <h1>introduction</h1>
        </div>
        <div class="">
            <div class="w-full">
                <div class="w-full bg-white p-4">
                    <h1>Product Details</h1>
                </div>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b">Specification</th>
                            <th class="px-4 py-2 border-b">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border-b">Nama</td>
                            <td class="px-4 py-2 border-b">Dried Tumeric Slice</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b">Proses Pengeringan</td>
                            <td class="px-4 py-2 border-b">Di jemur</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border-b">Bentuk</td>
                            <td class="px-4 py-2 border-b">Chips</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b">Ketebalan Irisan</td>
                            <td class="px-4 py-2 border-b">-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border-b">Ayakan</td>
                            <td class="px-4 py-2 border-b">0,4</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b">Warna</td>
                            <td class="px-4 py-2 border-b">Kuning kecoklatan</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border-b">Kotoran Asing</td>
                            <td class="px-4 py-2 border-b">&lt;5%</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border-b">Kadar Air</td>
                            <td class="px-4 py-2 border-b">10-12%</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border-b">Dokumen/Sertifikasi</td>
                            <td class="px-4 py-2 border-b">-</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Packaging</td>
                            <td class="px-4 py-2">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
