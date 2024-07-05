<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="overflow-x-hidden font-montserrat">
    <main class="flex-grow">
        @include('navbar.navbar')
        <div>
            @yield('content')
        </div>
        <div>
            @yield('about')
        </div>
        <div>
            @yield('contact')
        </div>
        <div>
            @yield('products')
        </div>
        <div>
            @yield('ginger')
        </div>
        <div>
            @yield('wetginger')
        </div>
        <div>
            @yield('driedtumeric')
        </div>
        <div>
            @yield('tumericpowder')
        </div>
        <div>
            @yield('tumericfinger')
        </div>
        <div>
            @yield('documentation')
        </div>
        <div>
            @yield('ourResource')
        </div>
        <div>
            @yield('processOrder')
        </div>
        <div>
            @yield('guideLine')
        </div>
    </main>
    @include('components.footer')
    @include('components.navIcon')
    {{-- js --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/main.js"></script>
    <script>
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

        // advanced animation
        ScrollReveal().reveal(".first", {
            delay: 200,
            distance: "50px",
            origin: "top",
            duration: 800,
            reset: false,
        });
        ScrollReveal().reveal(".seccond", {
            delay: 300,
            distance: "50px",
            origin: "top",
            duration: 800,
            reset: false,
        });
        ScrollReveal().reveal(".third", {
            delay: 400,
            distance: "50px",
            origin: "top",
            duration: 800,
            reset: false,
        });
        ScrollReveal().reveal(".fourth", {
            delay: 500,
            distance: "50px",
            origin: "top",
            duration: 800,
            reset: false,
        });
        // end advanced animation
    </script>
</body>

</html>
