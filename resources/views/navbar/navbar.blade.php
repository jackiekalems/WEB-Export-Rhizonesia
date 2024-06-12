<nav class="px-10 lg:px-20 py-5 sticky top-0 z-50 bg-white">
    <div class="flex flex-wrap items-center justify-between">
        <a href="#" class="flex">
            <svg class="h-10 mr-3" width="51" height="70" viewBox="0 0 51 70" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path d="M1 53H27.9022C40.6587 53 51 42.7025 51 30H24.0978C11.3412 30 1 40.2975 1 53Z"
                        fill="#76A9FA"></path>
                    <path
                        d="M-0.876544 32.1644L-0.876544 66.411C11.9849 66.411 22.4111 55.9847 22.4111 43.1233L22.4111 8.87674C10.1196 8.98051 0.518714 19.5571 -0.876544 32.1644Z"
                        fill="#A4CAFE"></path>
                    <path d="M50 5H23.0978C10.3413 5 0 15.2975 0 28H26.9022C39.6588 28 50 17.7025 50 5Z" fill="#1C64F2">
                    </path>
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="51" height="70" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
            <span class="self-center text-lg font-semibold whitespace-nowrap">CV. Almea Kausa Eterna</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button"
            class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
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
                    <a href="/"
                        class="hover:bg-blue-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-blue-700 text-gray-700 md:p-0 rounded focus:outline-none"
                        aria-current="page">Home</a>
                </li>
                <li class="relative group">
                    <a href="{{ route('about.us') }}" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="hover:bg-blue-500 lg:hover:bg-white md:bg-transparent hover:text-white pl-3 pr-4 py-2 md:hover:text-blue-700 text-gray-700 md:p-0 rounded focus:outline-none font-medium flex items-center justify-between w-full md:w-auto">About
                        Us
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></a>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="hidden group-hover:block absolute bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44 mt-[31px]">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign
                                out</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('products') }}"
                        class="hover:bg-blue-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-blue-700 text-gray-700 md:p-0 rounded focus:outline-none">
                        Prducts</a>
                </li>

                <li>
                    <a href="{{ route('contact.us') }}"
                        class="hover:bg-blue-500 lg:hover:bg-white md:bg-transparent hover:text-white block pl-3 pr-4 py-2 md:hover:text-blue-700 text-gray-700 md:p-0 rounded focus:outline-none">Contact</a>
                </li>
            </ul>
        </div>
        <div>
            <div class="relative flex" data-twe-input-wrapper-init data-twe-input-group-ref>
                <input type="search"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                    placeholder="Search" aria-label="Search" id="search-input" aria-describedby="search-button" />
                <label for="search-input"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Search
                </label>
                <button
                    class="relative z-[2] -ms-0.5 flex items-center rounded-e bg-primary px-5  text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    type="button" id="search-button" data-twe-ripple-init data-twe-ripple-color="light">
                    <span class="[&>svg]:h-5 [&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</nav>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
