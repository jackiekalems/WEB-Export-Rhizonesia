@extends('layouts.app')

@section('about')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[50vh] bg-cover bg-center"
        style="background-image: url('https://img.freepik.com/free-photo/assortment-ginger-wooden-board_23-2148799547.jpg?t=st=1718760428~exp=1718764028~hmac=449ff52d92d09d31c183f06da50942f6fe221dedf4738c6e3fdff8e928d0c19d&w=996');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold">Welcome to Our Website</h1>
                <p class="text-lg md:text-xl mt-4">Discover amazing content below</p>
            </div>
        </div>
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
                    <span>About Us</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    <div x-data="{
        openTab: 1,
        activeClasses: 'border-l border-t border-r rounded-t text-green-700',
        inactiveClasses: 'text-green-500 hover:text-green-700'
    }" x-init="const hash = window.location.hash;
    if (hash === '#whyUs') {
        openTab = 1;
    } else if (hash === '#ourResource') {
        openTab = 2;
    } else if (hash === '#qualityControll') {
        openTab = 3;
    }
    } else if (hash === '#documentation') {
        openTab = 4;
    }
    activeClasses: 'border-l border-t border-r rounded-t text-green-700',
        inactiveClasses: 'text-green-500 hover:text-green-700'
    }" class="p-6 flex flex-col items-center">
        <ul class="flex border-b text-green-500">
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                <a :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="cursor-pointer bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Why Us
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('our.resource') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Our Resource
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('quality.control') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Quality Control
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('documentation') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-xs lg:text-base">
                    Documentation
                </a>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1" id="whyUs">
                <section class="bg-white py-12">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
                            <h2
                                class="text-base font-semibold leading-7 text-green-100 bg-green-600 px-3 rounded-lg uppercase mb-4 lg:mb-8">
                                Key Features</h2>
                            <h1 class="lg:text-7xl text-4xl md:text-5xl font-bold tracking-tight text-gray-900 text-center">
                                Enhanced
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">Insurance
                                    Solutions</span>
                            </h1>
                            <p class="mt-6 text-md text-gray-600 max-w-lg text-center">Discover the exceptional features of
                                our
                                insurance
                                services designed to streamline processes and provide comprehensive coverage for your needs.
                            </p>
                        </div>
                        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900">
                                        <div
                                            class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-green-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                class="h-6 w-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                                            </svg>
                                        </div>Customized Coverage Plans
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600">Tailor your insurance coverage to
                                        match your
                                        unique needs.
                                        Our customizable plans ensure you only pay for the coverage that matters most to
                                        you.</dd>
                                </div>
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900">
                                        <div
                                            class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-green-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                class="h-6 w-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5"></path>
                                            </svg>
                                        </div>Risk Assessment Expertise
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600">Benefit from our cutting-edge risk
                                        assessment
                                        model,
                                        providing accurate insights into potential risks and ensuring your coverage aligns
                                        with your
                                        risk profile.
                                    </dd>
                                </div>
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900">
                                        <div
                                            class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-green-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                class="h-6 w-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </div>Cost-Efficient Premiums
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600">Experience cost-effective insurance
                                        solutions. We
                                        keep our
                                        premiums competitive, ensuring you receive optimal coverage without breaking the
                                        bank.</dd>
                                </div>
                                <div class="relative pl-16">
                                    <dt class="text-base font-semibold leading-7 text-gray-900">
                                        <div
                                            class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-green-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                                class="h-6 w-6 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                                                </path>
                                            </svg>
                                        </div>24/7 Customer Support
                                    </dt>
                                    <dd class="mt-2 text-base leading-7 text-gray-600">Our dedicated support team is
                                        available around
                                        the clock to
                                        assist you. Whether it's day or night, we're here to address your insurance-related
                                        queries
                                        promptly.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </section>
                <section id="new-features" class="py-8 bg-white sm:py-10 lg:py-16">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl font-bold leading-tight text-gray-900 sm:text-4xl xl:text-5xl">
                                Boost Your Productivity </h2>
                            <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-8">
                                Enhance your workflow with advanced features
                            </p>
                        </div>
                        <div
                            class="grid grid-cols-1 mt-10 text-center sm:mt-16 sm:grid-cols-2 sm:gap-x-12 gap-y-12 md:grid-cols-3 md:gap-0 xl:mt-24">
                            <!-- Feature 1 -->
                            <div class="md:p-8 lg:p-14 flex flex-col justify-center items-center">
                                <div class="w-14 h-14 rounded-full bg-purple-200 flex justify-center items-center">
                                    <i class="ri-line-chart-line text-3xl text-gray-900"></i>
                                </div>
                                <h3 class="mt-12 text-xl font-bold text-gray-900">Advanced Analytics</h3>
                                <p class="mt-5 text-base text-gray-600">Track and analyze your data with powerful analytics
                                    tools. Gain
                                    valuable
                                    insights for better decision-making.</p>
                            </div>

                            <!-- Feature 2 -->
                            <div
                                class="md:p-8 lg:p-14 md:border-l md:border-gray-200 flex flex-col justify-center items-center">
                                <div class="w-14 h-14 rounded-full bg-teal-200 flex justify-center items-center">
                                    <i class="ri-caravan-line text-3xl text-gray-900"></i>
                                </div>
                                <h3 class="mt-12 text-xl font-bold text-gray-900">Fast Integration</h3>
                                <p class="mt-5 text-base text-gray-600">Seamlessly integrate with your existing tools and
                                    systems for a
                                    smooth
                                    workflow experience.</p>
                            </div>

                            <!-- Feature 3 -->
                            <div
                                class="md:p-8 lg:p-14 md:border-l md:border-gray-200 flex flex-col justify-center items-center">
                                <div class="w-14 h-14 rounded-full bg-yellow-200 flex justify-center items-center">
                                    <i class="ri-lock-password-line text-3xl text-gray-900"></i>
                                </div>
                                <h3 class="mt-12 text-xl font-bold text-gray-900">Security First</h3>
                                <p class="mt-5 text-base text-gray-600">Ensure the safety of your data with top-notch
                                    security features.
                                    Your
                                    privacy is our priority.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
