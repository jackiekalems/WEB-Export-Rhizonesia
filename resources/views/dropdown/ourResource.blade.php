@extends('layouts.app')

@section('ourResource')
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
                <script src="https://www.amcharts.com/lib/4/core.js"></script>
                <script src="https://www.amcharts.com/lib/4/maps.js"></script>
                <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
                <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
                <script>
                    am4core.ready(function() {

                        var colorEntities = {
                            "originalText": "#db5c00",
                            "work": "#ffa600"
                        };

                        places = [{
                                "entity": "work",
                                "title": "[bold]Jawa Timur[/]\n[font-style:italic]Ponorogo[/]\n",
                                "lat": -7.8682,
                                "long": 111.4620,
                                "radius": 5
                            },
                            {
                                "entity": "work",
                                "title": "[bold]Jawa Tengah[/]\n[font-style:italic]Wonogiri[/]\n",
                                "lat": -7.8833,
                                "long": 110.9240,
                                "radius": 5
                            },
                            {
                                "entity": "work",
                                "title": "[bold]Jawa Timur[/]\n[font-style:italic]Malang[/]\n",
                                "lat": -7.9666,
                                "long": 112.6326,
                                "radius": 5
                            },
                            {
                                "entity": "work",
                                "title": "[bold]Jawa Timur[/]\n[font-style:italic]Pacitan[/]\n",
                                "lat": -8.1780,
                                "long": 111.1596,
                                "from": 2024,
                                "to": 2024,
                                "radius": 5
                            },
                            {
                                "entity": "originalText",
                                "title": "[bold]Original item[\/]\n[font-style:italic]Equation of the sun[\/]\n (1564-1655)",
                            }
                        ];

                        if (places.length === 0) {
                            $("#alert-info").append("There is no places associated with this item in the database");
                        } else if (places.length > 2) { // if there is more than two items to display on the map
                            for (var place of places) {
                                delete place.label;
                            }
                        }

                        am4core.useTheme(am4themes_animated);

                        // Create map instance
                        var chart = am4core.create("chartdiv", am4maps.MapChart);

                        // Set projection and quality definition of the map
                        chart.geodata = am4geodata_worldLow;
                        chart.projection = new am4maps.projections.Miller();
                        chart.deltaLongitude = -10; // move the map a little to the left

                        // Create map polygon series containing delineation of the countries
                        var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

                        // Exclude Antartica
                        polygonSeries.exclude = ["AQ"];

                        // Make map load data (like country names and polygon shapes) from GeoJSON
                        polygonSeries.useGeodata = true;

                        // Configure appearance of the background map
                        var polygonTemplate = polygonSeries.mapPolygons.template;
                        polygonTemplate.strokeOpacity = 0.5;
                        polygonTemplate.nonScalingStroke = true;
                        polygonTemplate.tooltipText = "{name}"; // showing country names on hover
                        polygonTemplate.fill = am4core.color("#c8c8c8"); // color of the countries
                        // Create hover state and set alternative fill color
                        var hs = polygonTemplate.states.create("hover");
                        hs.properties.fill = am4core.color("#b4b4b4");

                        // create a serie that can contains the data to draw markers on the map
                        var imageSeries = chart.series.push(new am4maps.MapImageSeries());

                        var openValue = 10000;
                        var closingValue = 0;
                        var placeMarker = {};
                        var placePoint = {};
                        var placeText = {};

                        for (var place of places) {
                            placePoint[place.id] = imageSeries.mapImages.create();
                            placePoint[place.id].latitude = place.lat;
                            placePoint[place.id].longitude = place.long;

                            // define marker appearance
                            placeMarker[place.id] = placePoint[place.id].createChild(am4core.Circle);
                            placeMarker[place.id].radius = place.radius;
                            placeMarker[place.id].fill = am4core.color(colorEntities[place.entity]); // color of the marker
                            placeMarker[place.id].stroke = am4core.color("white");
                            placeMarker[place.id].nonScaling = true; // the marker stays at the same size when zooming
                            placeMarker[place.id].tooltipText = place.title; // text appearing on hover on the marker

                            if (place.label) { // if there is only two items to display on the map
                                // define text appearing on the map
                                placeText[place.id] = placePoint[place.id].createChild(am4core.Label);
                                placeText[place.id].text = place.label;
                                placeText[place.id].fontSize = 17;
                                placeText[place.id].fill = am4core.color("black");
                                placeText[place.id].verticalCenter = "middle";
                                placeText[place.id].paddingLeft = 10;
                                placeText[place.id].paddingTop = place.shift;
                                placeText[place.id].nonScaling = true;
                            }

                            if (place.from < openValue) {
                                openValue = place.from;
                            }

                            if (place.to > closingValue) {
                                closingValue = place.to;
                            }
                        }

                        // Zoom control
                        chart.zoomControl = new am4maps.ZoomControl();

                        // Zoom on a country when clicked
                        polygonTemplate.events.on("hit", function(ev) {
                            ev.target.series.chart.zoomToMapObject(ev.target);
                        });

                        // Create a scrollbar
                        var scrollBar = chart.chartContainer.createChild(am4core.Scrollbar);
                        scrollBar.valign = "bottom";
                        scrollBar.padding(0, 100, 0, 100); // beginning and end of the 2 cursors
                        scrollBar.background.padding(0, 100, 0, 100); // beginning and end of the scrollBar itself

                        // Date conversion to enter a range from 0 to 1
                        var startBar = openValue - 50;
                        var endBar = closingValue + 50;
                        var timeRange = endBar - startBar;
                        var yearRange = 1 / timeRange;

                        // Create a bow to show the timeframe selected
                        var timeframe = chart.chartContainer.createChild(am4core.Container);
                        timeframe.width = 100;
                        timeframe.height = 35;
                        timeframe.align = "center";
                        timeframe.y = 420;
                        timeframe.padding(10, 10, 10, 10);
                        timeframe.background.fill = am4core.color("#000");
                        timeframe.background.fillOpacity = 0.1;
                        var timeframeLabel = timeframe.createChild(am4core.Label);
                        timeframeLabel.align = "center";

                        scrollBar.events.on("rangechanged", function() {
                            var rangeMin = scrollBar.range.start;
                            var rangeMax = scrollBar.range.end;

                            // Conversion of the min and max range value into date
                            var dateMinRange = parseInt((rangeMin / yearRange) + startBar);
                            var dateMaxRange = parseInt((rangeMax / yearRange) + startBar);
                            // Show the timerange selected
                            scrollBar.startGrip.tooltipText = `${dateMinRange}`;
                            scrollBar.endGrip.tooltipText = `${dateMaxRange}`;
                            timeframeLabel.text = `${dateMinRange}-${dateMaxRange}`;

                            for (var place of places) {
                                var valueMin = (place.from - startBar) * yearRange;
                                var valueMax = (place.to - startBar) * yearRange;

                                if ((valueMin >= rangeMin && valueMin <= rangeMax) || (valueMax >= rangeMin &&
                                        valueMax <= rangeMax) || (rangeMin >= valueMin && rangeMax <= valueMax)) {
                                    // when at least one cursor is in the timeframe
                                    // or when two cursors are in the timeframe
                                    placeMarker[place.id].fillOpacity = 1;
                                    placeMarker[place.id].strokeWidth = 1;
                                    if (place.label) {
                                        placeText[place.id].fillOpacity = 0.4;
                                    }
                                } else if (valueMax < rangeMin) {
                                    placeMarker[place.id].fillOpacity = 0.1;
                                    placeMarker[place.id].strokeWidth = 1;
                                    if (place.label) {
                                        placeText[place.id].fillOpacity = 0;
                                    }
                                } else {
                                    placeMarker[place.id].fillOpacity = 0;
                                    placeMarker[place.id].strokeWidth = 0;
                                    if (place.label) {
                                        placeText[place.id].fillOpacity = 0;
                                    }
                                }
                            }

                        });
                    });
                </script>
            </div>
        </div>
    </div>
@endsection
