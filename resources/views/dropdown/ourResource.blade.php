@extends('layouts.app')

@section('ourResource')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[30vh] md:h-[50vh] bg-cover bg-bottom"
        style="background-image: url('assets/Tampilan/Aboutus/image.PNG');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
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
            <li class="mr-1">
                <a href="{{ route('about.us') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Why Us
                </a>
                <a href="{{ route('about.us') }}"
                    class="bg-white flex items-center gap-x-2 py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-question-mark text-xl"></i>
                </a>
            </li>
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <!-- Set active class by using :class provided by Alpine -->
                <a href="#documentation" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Our Resource
                </a>
                <a href="" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-pin-distance-line text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('process.production') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Process Production
                </a>
                <a href="{{ route('process.production') }}"
                    class="bg-white flex items-center gap-x-2 py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-hourglass-2-fill text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('documentation') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Documentation
                </a>
                <a href="{{ route('documentation') }}"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-camera-line text-xl"></i>
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white py-2 px-4 font-semibold text-[11px] lg:text-base hidden md:block">
                    Guideline to Purchase
                </a>
                <a href="{{ route('guide.line') }}"
                    class="bg-white inline-block py-2 px-4 text-[11px] lg:text-base md:hidden">
                    <i class="ri-guide-line text-xl"></i>
                </a>
            </li>
        </ul>
        <div class="w-full">
            <div x-show="openTab === 1" class="mt-10">
                <!-- Content -->
                <div class="text-center my-10">
                    <h1 class="font-primary">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">OUR
                            RESOURCES
                        </span>
                    </h1>
                </div>
                <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
                <script src="https://www.amcharts.com/lib/3/maps/js/indonesiaLow.js"></script>
                <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
                <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
                    media="all" />
                <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
                <div id="chartdiv"></div>
                <div id="export"></div>
                <style>
                    #chartdiv {
                        width: 100%;
                        height: 100vh;
                    }

                    .amcharts-description-div {
                        background: #e6e6e6;
                        padding: 50px 24px 24px;
                        position: relative;
                    }

                    .amcharts-description-div:after {
                        content: "";
                        pointer-events: none;
                        width: 24px;
                        height: 24px;
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        display: block;
                        background-color: #e6e6e6;
                        background-image: url(data:image/svg+xml,%3Csvg%20id%3D%22Layer_1%22%20style%3D%22enable-background%3Anew%200%200%2064%2064%3B%22%20version%3D%221.1%22%20viewBox%3D%220%200%2064%2064%22%20xml%3Aspace%3D%22preserve%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%3E%3Cg%20id%3D%22Icon-Close%22%20transform%3D%22translate%28381.000000%2C%20231.000000%29%22%3E%3Cpolyline%20class%3D%22st0%22%20id%3D%22Fill-16%22%20fill%3D%22%23737373%22%20points%3D%22-370.7%2C-174.7%20-373%2C-177%20-327%2C-223%20-324.7%2C-220.7%20-370.7%2C-174.7%22/%3E%3Cpolyline%20fill%3D%22%23737373%22%20class%3D%22st0%22%20id%3D%22Fill-17%22%20points%3D%22-327%2C-174.7%20-373%2C-220.7%20-370.7%2C-223%20-324.7%2C-177%20-327%2C-174.7%22/%3E%3C/g%3E%3C/svg%3E);
                        background-size: 28px;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                    .description-image {
                        width: 348px;
                        height: 220px;
                        top: -220px;
                        left: 0px;
                        position: absolute;
                    }

                    .amcharts-description-title-div {
                        padding-bottom: 10px;
                        font-size: 34px;
                        font-weight: 200;
                        line-height: 40px;
                        letter-spacing: 0.025em;
                        padding: 2px 0 5px;
                    }

                    .amcharts-description-text-div {
                        font-size: 20px;
                        line-height: 24px;
                        font-weight: 400;
                        padding: 8px 0 4px;
                    }


                    .amcharts-description-text-div a {
                        display: inline-block;
                        padding: 10px 22px 10px 24px;
                        font-size: 13px;
                        color: white;
                        text-decoration: none;
                        text-transform: uppercase;
                        letter-spacing: 0.075em;
                        background: #0067b8;
                        margin: 11px 0 0 0;
                    }

                    .amcharts-description-close-img {
                        margin: -35px -10px 0 0;
                    }

                    .amcharts-export-menu,
                    .amcharts-chart-div>a[title="Interactive JavaScript maps"] {
                        display: none !important;
                    }

                    .amcharts-map-image {
                        /*   transform: translateY(-15px); */
                        /*   transform: scale(1.5) */

                    }

                    .amcharts-description-close-img {
                        position: relative;
                    }

                    .amcharts-description-close-img:after {
                        content: "";
                        width: 40px;
                        height: 40px;
                        position: absolute;
                        left: 0;
                        top: 0;
                        background: blue;
                        z-index: 9;
                        display: block;

                    }
                </style>
                <!-- Chart code -->
                <script>
                    /**
                     * Define SVG path for target icon
                     */
                    var targetSVG =
                        "M0,5.5 C0,2.462434 2.238576,0 5,0 C7.761424,0 10,2.462434 10,5.5 C10,5.668539 9.993108,5.835307 9.979617,6 C10,9.005737 5,16 5,16 C5,16 0,9.022339 0,6 C0.006892,5.835307 0,5.668539 0,5.5 Z";

                    /**
                     * Create the map
                     */
                    var map = AmCharts.makeChart("chartdiv", {
                        "type": "map",
                        "theme": "light",
                        "projection": "mercator",
                        "dataProvider": {
                            "map": "indonesiaLow",
                            "getAreasFromMap": true,
                            "images": [{
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Ponorogo",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                                "title": "Ponorogo",
                                "latitude": -7.8651,
                                "longitude": 111.4692
                            }, {
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Wonogiri",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                                "title": "Wonogiri",
                                "latitude": -7.8962,
                                "longitude": 110.9235
                            }, {
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Malang",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                                "title": "Malang",
                                "latitude": -7.9666,
                                "longitude": 112.6326
                            }, {
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Pacitan",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                                "title": "Pacitan",
                                "latitude": -8.1812,
                                "longitude": 111.0750
                            }, {
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Surabaya",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                                "title": "Surabaya",
                                "latitude": -7.2575,
                                "longitude": 112.7521
                            }, {
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Gresik",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "<div class='description-image' style='background-image: url(http://via.placeholder.com/348x220/d2d2d2)'></div>This is a description of this marker<br> <a href='https://codepen.io/verticalgrain/pen/vWxprB'>test</a>",
                                "title": "Gresik",
                                "latitude": -7.1566,
                                "longitude": 112.6555
                            }, {
                                "svgPath": targetSVG,
                                "scale": 1.5,
                                "accessibleLabel": "Kediri",
                                "tabIndex": 2,
                                "zoomLevel": 5,
                                // "description": "This is a description of this marker<br>",
                                "title": "Kediri",
                                "latitude": -7.8485,
                                "longitude": 112.0170
                            }]
                        },
                        "areasSettings": {
                            "unlistedAreasColor": "#737373",
                            "alpha": 1,
                            "color": "#16a34a", // Green color for the areas
                            "outlineColor": "#FFFFFF",
                            "rollOverColor": "#FFCC00",
                            "selectedColor": "#FFCC00"
                        },
                        "imagesSettings": {
                            "rollOverColor": "#2D372D",
                            "rollOverScale": 1.5,
                            "selectedScale": 2,
                            "selectedColor": "#2D372D",
                            "color": "#006DD1",
                            "accessibleLabel": "[[title]]",
                            "descriptionWindowLeft": 80,
                            "descriptionWindowTop": 278,
                            "descriptionWindowWidth": 300,
                            "easingFunction": "AmCharts.easeOutElastic"
                        },
                        "balloon": {
                            "shadowAlpha": 0,
                            "adjustBorderColor": true,
                            "animationDuration": 0,
                            "borderThickness": 0,
                            "color": "#ffffff",
                            "fillColor": "#2D372D",
                            "horizontalPadding": 25,
                            "verticalPadding": 17,
                            "offsetY": 27,
                            "fontSize": 18
                        },
                        "export": {
                            "enabled": true
                        }
                    });
                </script>
            </div>
        </div>
    </div>
@endsection
