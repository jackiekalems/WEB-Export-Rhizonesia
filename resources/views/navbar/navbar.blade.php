{{-- <div class="bg-green-500 text-white md:text-center py-2 px-4">
    Inspired from Dribbble Shot by <a href="https://dribbble.com/shots/14127375-Product-Page"
        class="font-bold underline hover:text-indigo-100">Wira Putra Nugraha</a>.
    See his works on <a href="https://dribbble.com/vlockn" class="font-bold underline hover:text-indigo-100">Dribbble</a>.
</div> --}}
<nav class="px-10 lg:px-20 py-5 sticky top-0 z-50 bg-white border-2">
    <div class="flex flex-wrap items-center justify-between">
        <a href="#" class="flex gap-x-3">
            <img src="assets/logo.png" class="w-8" alt="">
            <span class="self-center text-lg font-semibold whitespace-nowrap hidden md:block">Almea Kausa Eterna</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button"
            class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-green-300 rounded-lg inline-flex items-center justify-center"
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden md:block w-full md:w-auto rounded-lg mt-10 lg:mt-0" id="mobile-menu">
            <ul class="flex-col md:flex-row flex md:space-x-14 mt-4 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="{{ route('welcome') }}"
                        class="hover:bg-green-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-green-700 text-gray-700 md:p-0 rouded md:rounded-none focus:outline-none border-b-2 border-transparent hover:border-green-500"
                        aria-current="page">Home</a>
                </li>
                <li class="relative group:" x-data="{ showChildren: false }" @mouseleave="showChildren=false"
                    @mouseenter="showChildren=true">
                    <a href="{{ route('about.us') }}"
                        class="hover:bg-green-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-green-700 text-gray-700 md:p-0 rouded md:rounded-none focus:outline-none border-b-2 border-transparent hover:border-green-500"
                        aria-current="page">
                        <span class="mr-1">About Us <i class="ri-arrow-down-s-line"></i></span>
                    </a>
                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                        x-show="showChildren" x-transition:enter="transition ease duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease duration-300 transform"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                        <span
                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                        <div class="bg-white rounded w-full relative z-10 py-1">
                            <ul class="list-reset">
                                <li class="relative" @mouseenter="showChildren=true">
                                    <a href="{{ route('about.us') }}"
                                        class="px-4 py-2 flex w-full items-start hover:bg-green-500 hover:text-white no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Why Us</span>
                                        <span class="ml-2"> <i class="mdi mdi-chevron-right"></i> </span>
                                    </a>
                                </li>
                                <li class="relative" @mouseenter="showChildren=true">
                                    <a href="{{ route('our.resource') }}"
                                        class="px-4 py-2 flex w-full items-start hover:bg-green-500 hover:text-white no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Our Resource</span>
                                        <span class="ml-2"> <i class="mdi mdi-chevron-right"></i> </span>
                                    </a>
                                </li>
                                <li class="relative" @mouseenter="showChildren=true">
                                    <a href="{{ route('process.production') }}"
                                        class="px-4 py-2 flex w-full items-start hover:bg-green-500 hover:text-white no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Process Productiom</span>
                                        <span class="ml-2"> <i class="mdi mdi-chevron-right"></i> </span>
                                    </a>
                                </li>
                                <li class="relative" @mouseenter="showChildren=true">
                                    <a href="{{ route('documentation') }}"
                                        class="px-4 py-2 flex w-full items-start hover:bg-green-500 hover:text-white no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Documentation</span> </a>
                                </li>
                                <li class="relative" @mouseenter="showChildren=true">
                                    <a href="{{ route('guide.line') }}"
                                        class="px-4 py-2 flex w-full items-start hover:bg-green-500 hover:text-white no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Guideline to Process</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('products') }}"
                        class="hover:bg-green-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-green-700 text-gray-700 md:p-0 rouded md:rounded-none focus:outline-none border-b-2 border-transparent hover:border-green-500"
                        aria-current="page">
                        Products</a>
                </li>

                <li>
                    <a href="{{ route('contact.us') }}"
                        class="hover:bg-green-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-green-700 text-gray-700 md:p-0 rouded md:rounded-none focus:outline-none border-b-2 border-transparent hover:border-green-500"
                        aria-current="page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
