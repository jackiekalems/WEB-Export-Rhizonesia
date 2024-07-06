<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- favicon --}}
    <link rel="icon" href="{{ url('assets/logo.png') }}" />
    <title>Almea Kausa Eterna</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- scroll reveal --}}
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="overflow-x-hidden font-montserrat">
    @include('navbar.navbar')
    @include('components.hero')
    @include('components.product')
    @include('components.whyUs')
    @include('components.company-profile')
    @include('components.faq')
    @include('components.footer')
    @include('components.navIcon')
    {{-- js --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/main.js"></script>
    <script>
        // scroll reveall
        document.addEventListener("DOMContentLoaded", function() {
            // home
            // globals titles
            ScrollReveal().reveal(".title", {
                delay: 200,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            // end globals titles\

            // globals right animations
            ScrollReveal().reveal(".rightAnimation", {
                delay: 200,
                distance: "50px",
                origin: "right",
                duration: 800,
                reset: false,
            });
            // end globals right animations

            // globals left animations
            ScrollReveal().reveal(".leftAnimation", {
                delay: 200,
                distance: "50px",
                origin: "left",
                duration: 800,
                reset: false,
            });
            // end globals left animations

            // globals top animations
            ScrollReveal().reveal(".topAnimation", {
                delay: 200,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            // end globals top animations

            // globals top animations
            ScrollReveal().reveal(".bottomAnimation", {
                delay: 200,
                distance: "50px",
                origin: "bottom",
                duration: 800,
                reset: false,
            });
            // end globals top animations

            // why us
            ScrollReveal().reveal(".why__us1", {
                delay: 300,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            ScrollReveal().reveal(".why__us2", {
                delay: 400,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            ScrollReveal().reveal(".why__us3", {
                delay: 500,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            ScrollReveal().reveal(".why__us4", {
                delay: 600,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            // end why us

            // company profile
            ScrollReveal().reveal(".why__us4", {
                delay: 600,
                distance: "50px",
                origin: "top",
                duration: 800,
                reset: false,
            });
            // end company profile

        });
    </script>

</html>
