<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Wellco Hardwoods')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="text-black/50 bg-gray-50">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-white to-orange-50"></div>
                <div class="absolute inset-0"
                    style="background-image: url('{{ asset('images/home/home-pattern.jpg') }}');">
                </div>
            </div>
            <div class="flex flex-col justify-between min-h-screen relative w-full max-w-full">
                <!-- Header -->
                @include('layouts.partials.header')

                <!-- Hero Section -->
                @yield('hero')

                <!-- Main Content -->
                <main>
                    @yield('content')
                </main>

                <!-- Footer -->
                @include('layouts.partials.footer')
            </div>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="hidden fixed inset-0 z-50 bg-black bg-opacity-95 flex items-center justify-center" style="padding: 0;">
        <button id="lightbox-close" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <button id="lightbox-prev" class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-10">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        
        <button id="lightbox-next" class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-10">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        
        <div class="relative flex items-center justify-center" style="width: calc(100vw - 120px); height: calc(100vh - 80px);">
            <img id="lightbox-img" src="" alt="" style="max-width: 100%; max-height: 100%; min-width: 60vw; min-height: 60vh; width: auto; height: auto; object-fit: contain;">
            <div id="lightbox-counter" class="absolute bottom-4 left-1/2 -translate-x-1/2 text-white text-sm bg-black bg-opacity-50 px-4 py-2 rounded-full"></div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
