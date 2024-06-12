<section x-data="{
    openFaq1: false,
    openFaq2: false,
    openFaq3: false,
    openFaq4: false,
    openFaq5: false,
    openFaq6: false
}" class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                    <div class="text-center mt-10">
                        <h1 class="text-2xl md:text-4xl text-black font-extrabold py-3 pricing__blog">
                            FAQ <span class="text-green-600">SERVICES</span>
                        </h1>
                        <hr class="my-4 h-1 w-1/4 bg-red-500 border-0 rounded-full mx-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 lg:w-1/2">
                <div
                    class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                    <button class="flex w-full text-left faq-btn" @click="openFaq1 = !openFaq1">
                        <div
                            class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <svg :class="openFaq1 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-black">
                                How long we deliver your first blog post?
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq1" class="faq-content pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-black">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div
                    class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                    <button class="flex w-full text-left faq-btn" @click="openFaq2 = !openFaq2">
                        <div
                            class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <svg :class="openFaq2 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-black">
                                How long we deliver your first blog post?
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq2" class="faq-content pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-black">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div
                    class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                    <button class="flex w-full text-left faq-btn" @click="openFaq3 = !openFaq3">
                        <div
                            class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <svg :class="openFaq3 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-black">
                                How long we deliver your first blog post?
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq3" class="faq-content pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-black">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div
                    class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                    <button class="flex w-full text-left faq-btn" @click="openFaq4 = !openFaq4">
                        <div
                            class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <svg :class="openFaq4 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-black">
                                How long we deliver your first blog post?
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq4" class="faq-content pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-black">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div
                    class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                    <button class="flex w-full text-left faq-btn" @click="openFaq5 = !openFaq5">
                        <div
                            class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <svg :class="openFaq5 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-black">
                                How long we deliver your first blog post?
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq5" class="faq-content pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-black">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
                <div
                    class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] sm:p-8 lg:px-6 xl:px-8">
                    <button class="flex w-full text-left faq-btn" @click="openFaq6 = !openFaq6">
                        <div
                            class="bg-primary/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <svg :class="openFaq6 && 'rotate-180'" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-black">
                                How long we deliver your first blog post?
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq6" class="faq-content pl-[62px]">
                        <p class="py-3 text-base leading-relaxed text-black">
                            It takes 2-3 weeks to get your first blog post ready. That
                            includes the in-depth research & creation of your monthly
                            content marketing strategy that we do before writing your
                            first blog post, Ipsum available .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 z-[-1]">
        <svg width="1440" height="969" viewBox="0 0 1440 969" fill="none"
            xmlns="http://www.w3.org/2000/svg">
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
                <linearGradient id="paint0_linear_95:1005" x1="956.081" y1="155.625" x2="1267.57"
                    y2="1013.24" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#32CD32" />
                    <stop offset="1" stop-color="#32CD32" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="paint1_linear_95:1005" x1="189.081" y1="-83.0231" x2="500.573"
                    y2="774.592" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#32CD32" />
                    <stop offset="1" stop-color="#32CD32" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>
    </div>
</section>
