<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    @vite('resources/css/app.css')
    <style>
        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .cloud-effect {
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 768px) {
            .swiper-container {
                height: 40%;
            }
        }

        @media (min-width: 769px) {
            .swiper-container {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    @include('component.navbar')
    @include('pages.hero')
    @include('pages.footer')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>
