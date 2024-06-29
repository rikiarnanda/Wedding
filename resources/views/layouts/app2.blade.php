<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .fade-in {
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: rgba(128, 128, 128, 0.7);
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: rgba(128, 128, 128, 0.9);
        }
    </style>
</head>

<body class="bg-white text-gray-900">
    <nav class="bg-white p-3 border-b border-gray-200 fixed w-full z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-amber-500 hover:text-amber-600 transition-colors duration-300">Wedding Organizer</a>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('dashboard.vendor') }}" class="text-gray-700 hover:text-amber-500 font-medium transition-colors duration-300">Produk</a>
                <a href="{{ route('dashboard.crew') }}" class="text-gray-700 hover:text-amber-500 font-medium transition-colors duration-300">Crew</a>
                <a href="{{ route('dashboard.paket') }}" class="text-gray-700 hover:text-amber-500 font-medium transition-colors duration-300">Paket</a>
                @auth
                @if(auth()->user())
                <a href="{{ route('order.index') }}" class="text-gray-700 hover:text-amber-500 font-medium transition-colors duration-300">Order</a>
                @endif
                @endauth
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border border-gray-300 rounded-md shadow-md">
                <a href="{{ route('dashboard.vendor') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-500 transition-colors duration-300">Vendor</a>
                <a href="{{ route('dashboard.crew') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-500 transition-colors duration-300">Crew</a>
                <a href="{{ route('dashboard.paket') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-amber-500 transition-colors duration-300">Paket</a>
            </div>
        </div>
    </nav>

    <div class="pt-16">
        <div class="container mx-auto px-4 py-8">
            @yield('content')
        </div>
    </div>

    <a href="https://t.me/kikiorganizer_bot" class="fixed bottom-4 right-4 bg-blue-500 p-3 rounded-full shadow-lg hover:bg-blue-600 focus:bg-blue-600 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
            <path fill="#29b6f6" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z" />
            <path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z" />
            <path fill="#b0bec5" d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z" />
            <path fill="#cfd8dc" d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z" />
        </svg>
    </a>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
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
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                speed: 800,
            });
        });
    </script>
</body>

</html>