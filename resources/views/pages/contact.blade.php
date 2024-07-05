@extends('layouts.app')

@section('contact')
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
                    <span>Contact Us</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    @include('components.faq')
    <div class="absolute top-0 right-0 z-[-1]">
        <svg width="1440" height="969" viewBox="0 0 1440 969" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="mask0_95:1005" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1440"
                height="969">
                <rect width="1440" height="969" fill="#FEF2F2" />
            </mask>
            <g mask="url(#mask0_95:1005)">
                <path opacity="0.1"
                    d="M1086.96 297.748C1184.48 248.165 1333.11 248.165 1430.62 297.748L1733.19 450.738C1850.46 509.923 1850.46 643.077 1733.19 702.262L1430.62 855.252C1333.11 904.835 1184.48 904.835 1086.96 855.252L784.384 702.262C667.116 643.077 667.116 509.923 784.384 450.738L1086.96 297.748Z"
                    fill="url(#paint0_linear_95:1005)" />
                <path opacity="0.1"
                    d="M319.962 58.1003C417.479 8.51734 566.106 8.5173 663.623 58.1003L966.194 211.09C1083.46 270.274 1083.46 403.428 966.194 462.613L663.623 615.603C566.106 665.186 417.479 665.186 319.962 615.603L17.3917 462.613C-99.8754 403.428 -99.8754 270.274 17.3917 211.09L319.962 58.1003Z"
                    fill="url(#paint1_linear_95:1005)" />
            </g>
            <defs>
                <linearGradient id="paint0_linear_95:1005" x1="956.081" y1="155.625" x2="1267.57" y2="1013.24"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#32CD32" />
                    <stop offset="1" stop-color="#32CD32" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="paint1_linear_95:1005" x1="189.081" y1="-83.0231" x2="500.573" y2="774.592"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#32CD32" />
                    <stop offset="1" stop-color="#32CD32" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    </div>
    <div class="text-center my-10 first">
        <h1 class="font-primary">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">CONTACT
                US
            </span>
        </h1>
    </div>
    <div class="flex gap-6 flex-col md:flex-row items-center justify-center w-screen h-screen text-gray-800 p-10 bg-white">
        <!-- Component Start -->
        <div class="flex flex-wrap flex-col gap-6 w-full max-w-6xl seccond">

            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-phone-line text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Telp :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">+62 851 9000 0236</span>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/6285190000236" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-whatsapp-line text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Whatsapp :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">+62 851 9000 0236</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>

            <!-- Tile 2 -->
            <a href="https://mail.google.com/mail/u/0/?hl=en#inbox?compose=CllgCJfnbMNVfztDpKJjxhDwSKZxKRGxPnDjGnncRfLqdkjxzhvbgdgPCFQLrSnKMbzpkGvqBbB"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-mail-line text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Email :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">almeakausaeterna@gmail.com</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>
            <a href="https://maps.app.goo.gl/LpXrcTciMhosqwSv5" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-map-pin-line text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Address</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">Surabaya, Eas Java, Indonesia</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>
        </div>
        <!-- Component End  -->

        <img src="assets/contact_01.jpg" alt="" class="hidden lg:block third">

        <!-- Component Start -->
        <div class="flex flex-wrap flex-col gap-6 w-full max-w-6xl fourth">

            <!-- Tile 1 -->
            <a href class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-instagram-line text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Instagram :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>
            <a href=""
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-facebook-circle-fill text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Facebook :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>
            <a href=""
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-linkedin-box-fill text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Linkedin :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">@imwira12</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>
            <a href="https://www.tiktok.com/@almeakausaeterna?_t=8nZN3x8o4H3&_r=1" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-tiktok-line text-3xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-base md:text-xl font-semibold">Tiktok :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-3xl"></i>
            </a>
        </div>
        <!-- Component End  -->
    </div>
    <section class="text-gray-600 body-font relative mt-20 lg:mt-0 first">
        <div class="container px-5 py-24 mx-auto">
            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="c9202fe9-e123-47a4-8174-c3846f3a3d3c">
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="btn-primary">Send
                            </button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </section>
@endsection
