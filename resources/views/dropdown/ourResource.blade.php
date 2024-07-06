@extends('layouts.app')

@section('ourResource')
    <script src="//unpkg.com/alpinejs"></script>
    <header class="relative w-full h-[50vh] bg-cover bg-bottom"
        style="background-image: url('assets/Tampilan/Aboutus/image.PNG');">
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
            <li class="mr-1">
                <!-- Set active class by using :class provided by Alpine -->
                <a href="{{ route('about.us') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Why Us
                </a>
            </li>
            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="mr-1">
                <!-- Set active class by using :class provided by Alpine -->
                <a href="#documentation" :class="openTab === 1 ? activeClasses : inactiveClasses"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Our Resource
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('process.production') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Process Production
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('documentation') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Documentation
                </a>
            </li>
            <li class="mr-1">
                <a href="{{ route('guide.line') }}"
                    class="bg-white inline-block py-2 px-4 font-semibold text-[11px] lg:text-base">
                    Guideline to Purchase
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
                            RESOURCE
                        </span>
                    </h1>
                </div>
                <div id="chartdiv" style="height: 500px;"></div>
                <h4 id="alert-info" class="noInfo" style="text-align: center"></h4>
                <h4 id="dates"></h4>
                <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
                <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                <script>
                    am5.ready(function() {
                        /**
                         * ---------------------------------------
                         * This demo was created using amCharts 5.
                         *
                         * For more information visit:
                         * https://www.amcharts.com/
                         *
                         * Documentation is available at:
                         * https://www.amcharts.com/docs/v5/
                         * ---------------------------------------
                         */

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("chartdiv");

                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([am5themes_Animated.new(root)]);

                        // Create the map chart
                        // https://www.amcharts.com/docs/v5/charts/map-chart/
                        var chart = root.container.children.push(
                            am5map.MapChart.new(root, {
                                panX: "none",
                                panY: "none",
                                projection: am5map.geoMercator(),
                                homeGeoPoint: {
                                    latitude: -2.5,
                                    longitude: 118.0
                                },
                                homeZoomLevel: 5,
                            })
                        );

                        // Create main polygon series for countries
                        // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
                        var polygonSeries = chart.series.push(
                            am5map.MapPolygonSeries.new(root, {
                                geoJSON: am5geodata_worldLow,
                                include: ["ID"], // Only include Indonesia
                            })
                        );

                        polygonSeries.mapPolygons.template.setAll({
                            fill: am5.color("#22c55e"),
                            stroke: am5.color("#000000"),
                            strokeWidth: 0.5,
                        });

                        // Create point series for markers
                        // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
                        var pointSeries = chart.series.push(
                            am5map.MapPointSeries.new(root, {})
                        );
                        var colorset = am5.ColorSet.new(root, {});

                        pointSeries.bullets.push(function() {
                            var container = am5.Container.new(root, {
                                tooltipText: "{title}",
                                cursorOverStyle: "pointer",
                            });

                            container.events.on("click", (e) => {
                                window.location.href = e.target.dataItem.dataContext.url;
                            });

                            var circle = container.children.push(
                                am5.Circle.new(root, {
                                    radius: 4,
                                    tooltipY: 0,
                                    fill: colorset.next(),
                                    strokeOpacity: 0,
                                })
                            );

                            var circle2 = container.children.push(
                                am5.Circle.new(root, {
                                    radius: 4,
                                    tooltipY: 0,
                                    fill: colorset.next(),
                                    strokeOpacity: 0,
                                    tooltipText: "{title}",
                                })
                            );

                            circle.animate({
                                key: "scale",
                                from: 1,
                                to: 5,
                                duration: 600,
                                easing: am5.ease.out(am5.ease.cubic),
                                loops: Infinity,
                            });
                            circle.animate({
                                key: "opacity",
                                from: 1,
                                to: 0.1,
                                duration: 600,
                                easing: am5.ease.out(am5.ease.cubic),
                                loops: Infinity,
                            });

                            return am5.Bullet.new(root, {
                                sprite: container,
                            });
                        });

                        var cities = [{
                                title: "Ponorogo",
                                latitude: -7.8655,
                                longitude: 111.469,
                            },
                            {
                                title: "Wonogiri",
                                latitude: -7.9,
                                longitude: 110.9,
                            },
                            {
                                title: "Malang",
                                latitude: -7.9666,
                                longitude: 112.6326,
                            },
                            {
                                title: "Pacitan",
                                latitude: -8.1802,
                                longitude: 111.171,
                            },
                            {
                                title: "Surabaya",
                                latitude: -7.2575,
                                longitude: 112.7521,
                            },
                            {
                                title: "Gresik",
                                latitude: -7.1565,
                                longitude: 112.655,
                            },
                            {
                                title: "Kediri",
                                latitude: -7.848,
                                longitude: 112.0173,
                            },
                        ];

                        for (var i = 0; i < cities.length; i++) {
                            var city = cities[i];
                            addCity(city.longitude, city.latitude, city.title);
                        }

                        function addCity(longitude, latitude, title) {
                            pointSeries.data.push({
                                geometry: {
                                    type: "Point",
                                    coordinates: [longitude, latitude]
                                },
                                title: title,
                            });
                        }

                        // Make stuff animate on load
                        chart.appear(1000, 100);
                    }); // end am5.ready()
                </script>
            </div>
        </div>
    </div>
@endsection
