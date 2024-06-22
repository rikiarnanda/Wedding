@extends('layouts.app2')

@section('title', 'Home')

@section('content')
<!-- Section: Hero -->
<section x-data="{ show: false }" x-intersect="show = true" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" class="min-h-screen flex items-center bg-white">
    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center px-4 py-12">
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl font-bold text-gray-900">Wedding Organizer Terbaik di MEDAN</h1>
            <p class="text-gray-600 my-4 w-1/2">Beli cincin di pasar lama Cincin cantik untuk si dia, Kenalin ini Wedding Organizer Jamin
                buat acara wedding jadi ceria.</p>
            <button class="bg-yellow-500 text-white px-6 py-3 rounded shadow-md hover:bg-yellow-600 transition-colors duration-300">Hubungi
                Kami</button>
        </div>
        <div class="w-full md:w-1/2">
            <img src="{{ asset('images/hero.jpg') }}" alt="Wedding Organizer" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
</section>

<!-- Section: Existing Cards -->
<section x-data="{ show: false }" x-intersect="show = true" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" class="min-h-screen flex items-center py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Vendor Card -->
            <a href="/dashboard/vendor" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/vendor.jpeg') }}" alt="Vendor" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Vendor</h3>
                    <p class="text-gray-600">Vendor terbaik yang sudah lama berkerja sama dalam menciptakan moment
                        terindah.</p>
                </div>
            </a>
            <!-- Crew Card -->
            <a href="/dashboard/crew" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/crew.jpg') }}" alt="Crew" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Crew</h3>
                    <p class="text-gray-600">Crew yang membantu dalam menciptakan moment terindah anda.</p>
                </div>
            </a>
            <!-- Paketan Card -->
            <a href="/dashboard/paketan" class="block bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/Paketan.jpg') }}" alt="Paketan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Paketan</h3>
                    <p class="text-gray-600">Paketan yang dapat mewujudkan impian pernikahan anda.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Section: Keunggulan WO -->
<section x-data="{ show: false }" x-intersect="show = true" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" class="min-h-screen flex items-center py-12 bg-gradient-to-r from-yellow-500 to-yellow-300">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8 text-white">Keunggulan Wedding Organizer Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-70 rounded-lg shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                        <path d="M 14.9303 2.5 V 8.4 C 14.9303 8.84 14.4103 9.06 14.0903 8.77 L 12.3403 7.16 C 12.1503 6.98 11.8503 6.98 11.6603 7.16 L 9.91031 8.76 C 9.59031 9.06 9.07031 8.83 9.07031 8.4 V 2.5 C 9.07031 2.22 9.29031 2 9.57031 2 H 14.4303 C 14.7103 2 14.9303 2.22 14.9303 2.5 Z" fill="#292D32" />
                        <path d="M 16.98 2.05891 C 16.69 2.01891 16.43 2.26891 16.43 2.55891 V 8.57891 C 16.43 9.33891 15.98 10.0289 15.28 10.3389 C 14.58 10.6389 13.77 10.5089 13.21 9.98891 L 12.34 9.18891 C 12.15 9.00891 11.86 9.00891 11.66 9.18891 L 10.79 9.98891 C 10.43 10.3289 9.96 10.4989 9.49 10.4989 C 9.23 10.4989 8.97 10.4489 8.72 10.3389 C 8.02 10.0289 7.57 9.33891 7.57 8.57891 V 2.55891 C 7.57 2.26891 7.31 2.01891 7.02 2.05891 C 4.22 2.40891 3 4.29891 3 6.99891 V 16.9989 C 3 19.9989 4.5 21.9989 8 21.9989 H 16 C 19.5 21.9989 21 19.9989 21 16.9989 V 6.99891 C 21 4.29891 19.78 2.40891 16.98 2.05891 Z M 17.5 18.7489 H 9 C 8.59 18.7489 8.25 18.4089 8.25 17.9989 C 8.25 17.5889 8.59 17.2489 9 17.2489 H 17.5 C 17.91 17.2489 18.25 17.5889 18.25 17.9989 C 18.25 18.4089 17.91 18.7489 17.5 18.7489 Z M 17.5 14.7489 H 13.25 C 12.84 14.7489 12.5 14.4089 12.5 13.9989 C 12.5 13.5889 12.84 13.2489 13.25 13.2489 H 17.5 C 17.91 13.2489 18.25 13.5889 18.25 13.9989 C 18.25 14.4089 17.91 14.7489 17.5 14.7489 Z" fill="#292D32" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Profesionalisme</h3>
                <p class="text-gray-600">Kami menyediakan tim profesional yang berpengalaman dalam menangani berbagai jenis acara pernikahan, memastikan setiap detail berjalan dengan sempurna.</p>
            </div>
            <div class="bg-white bg-opacity-70 rounded-lg shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                        <path d="M 11.984375 -0.013671875 A 1.0001 1.0001 0 0 0 11 1 L 11 2 A 1.0001 1.0001 0 1 0 13 2 L 13 1 A 1.0001 1.0001 0 0 0 11.984375 -0.013671875 z M 4.2109375 3.2109375 A 1.0001 1.0001 0 0 0 3.515625 4.9296875 L 4.2226562 5.6367188 A 1.0001 1.0001 0 1 0 5.6367188 4.2226562 L 4.9296875 3.515625 A 1.0001 1.0001 0 0 0 4.2109375 3.2109375 z M 19.757812 3.2128906 A 1.0001 1.0001 0 0 0 19.070312 3.515625 L 18.363281 4.2226562 A 1.0001 1.0001 0 1 0 19.777344 5.6367188 L 20.484375 4.9296875 A 1.0001 1.0001 0 0 0 19.757812 3.2128906 z M 12 5 C 8.14 5 5 8.14 5 12 C 5 14.785 6.639 17.188453 9 18.314453 L 9 21 C 9 22.103 9.897 23 11 23 L 13 23 C 14.103 23 15 22.103 15 21 L 15 18.314453 C 17.361 17.188453 19 14.785 19 12 C 19 8.14 15.86 5 12 5 z M 1 11 A 1.0001 1.0001 0 1 0 1 13 L 2 13 A 1.0001 1.0001 0 1 0 2 11 L 1 11 z M 22 11 A 1.0001 1.0001 0 1 0 22 13 L 23 13 A 1.0001 1.0001 0 1 0 23 11 L 22 11 z M 4.9101562 18.060547 A 1.0001 1.0001 0 0 0 4.2226562 18.363281 L 3.515625 19.070312 A 1.0001 1.0001 0 1 0 4.9296875 20.484375 L 5.6367188 19.777344 A 1.0001 1.0001 0 0 0 4.9101562 18.060547 z M 19.060547 18.060547 A 1.0001 1.0001 0 0 0 18.363281 19.777344 L 19.070312 20.484375 A 1.0001 1.0001 0 1 0 20.484375 19.070312 L 19.777344 18.363281 A 1.0001 1.0001 0 0 0 19.060547 18.060547 z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Kreativitas</h3>
                <p class="text-gray-600">Kami selalu berinovasi dan menawarkan ide-ide kreatif untuk membuat acara
                    pernikahan Anda unik dan tak terlupakan.</p>
            </div>
            <div class="bg-white bg-opacity-70 rounded-lg shadow-lg p-6 transform hover:scale-105 transition-transform duration-300">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
                        <path d="M17.5291 7.77C17.4591 7.76 17.3891 7.76 17.3191 7.77C15.7691 7.72 14.5391 6.45 14.5391 4.89C14.5391 3.3 15.8291 2 17.4291 2C19.0191 2 20.3191 3.29 20.3191 4.89C20.3091 6.45 19.0791 7.72 17.5291 7.77Z" fill="#292D32" />
                        <path d="M20.7916 14.7004C19.6716 15.4504 18.1016 15.7304 16.6516 15.5404C17.0316 14.7204 17.2316 13.8104 17.2416 12.8504C17.2416 11.8504 17.0216 10.9004 16.6016 10.0704C18.0816 9.8704 19.6516 10.1504 20.7816 10.9004C22.3616 11.9404 22.3616 13.6504 20.7916 14.7004Z" fill="#292D32" />
                        <path d="M6.44016 7.77C6.51016 7.76 6.58016 7.76 6.65016 7.77C8.20016 7.72 9.43016 6.45 9.43016 4.89C9.43016 3.29 8.14016 2 6.54016 2C4.95016 2 3.66016 3.29 3.66016 4.89C3.66016 6.45 4.89016 7.72 6.44016 7.77Z" fill="#292D32" />
                        <path d="M6.55109 12.8506C6.55109 13.8206 6.76109 14.7406 7.14109 15.5706C5.73109 15.7206 4.26109 15.4206 3.18109 14.7106C1.60109 13.6606 1.60109 11.9506 3.18109 10.9006C4.25109 10.1806 5.76109 9.89059 7.18109 10.0506C6.77109 10.8906 6.55109 11.8406 6.55109 12.8506Z" fill="#292D32" />
                        <path d="M12.1208 15.87C12.0408 15.86 11.9508 15.86 11.8608 15.87C10.0208 15.81 8.55078 14.3 8.55078 12.44C8.56078 10.54 10.0908 9 12.0008 9C13.9008 9 15.4408 10.54 15.4408 12.44C15.4308 14.3 13.9708 15.81 12.1208 15.87Z" fill="#292D32" />
                        <path d="M8.87078 17.9406C7.36078 18.9506 7.36078 20.6106 8.87078 21.6106C10.5908 22.7606 13.4108 22.7606 15.1308 21.6106C16.6408 20.6006 16.6408 18.9406 15.1308 17.9406C13.4208 16.7906 10.6008 16.7906 8.87078 17.9406Z" fill="#292D32" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Pelayanan</h3>
                <p class="text-gray-600">Kami berkomitmen untuk memberikan pelayanan terbaik kepada setiap klien kami,
                    memastikan kepuasan dan kenyamanan Anda adalah prioritas utama kami.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Paket -->
<section x-data="{ show: false }" x-intersect="show = true" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" class="min-h-screen flex items-center py-12 bg-gradient-to-r from-yellow-500 to-yellow-300">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8 text-white">Paket Layanan & Jasa
            Yang Disediakan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($pakets as $paket)
            <div class="bg-white bg-opacity-70 rounded-lg shadow-lg p-6 transform hover:scale-105 transition-transform duration-300 text-center">
                <h3 class="text-lg font-bold text-gray-900">{{ $paket->nama_paket }}</h3>
                <p class="text-gray-700 mb-4">{{ $paket->harga }}</p>
                <ul class="text-gray-600">
                    @foreach(explode(',', $paket->detail) as $detail)
                    <li class="flex justify-between items-center">
                        <span class="mr-2">{{ $detail }}</span>
                        <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </li>
                    @endforeach
                </ul>
                <button class="mt-4 bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 transition-colors duration-300">Booking
                    Sekarang</button>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Section: Testimonials Carousel -->
<section x-data="{ show: false }" x-intersect="show = true" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" class="min-h-screen flex items-center py-12 relative bg-cover bg-center">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gray-300 opacity-60"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl font-bold text-gray-400 text-center mb-8">Apa Kata Mereka?</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($testimonis as $testimoni)
                <div class="swiper-slide">
                    <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg text-center">
                        <p class="text-gray-600 mb-4">{{ $testimoni->testimoni }}</p>
                        <p class="text-gray-900 font-semibold">{{ $testimoni->paket->nama_paket }}</p>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
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

<style>
    .swiper-button-next,
    .swiper-button-prev {
        color: rgba(128, 128, 128, 0.7);
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        color: rgba(255, 255, 255, 0.9);
    }
</style>
@endsection