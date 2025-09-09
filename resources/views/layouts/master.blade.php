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
            <div class="absolute inset-0 -z-10">
                <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-white to-orange-50"></div>
                <div class="absolute inset-0"
                    style="background-image: radial-gradient(#d6d3d1 1px, transparent 1px); background-size: 32px 32px;">
                </div>
            </div>
            <div @if(Route::is('home')) class="flex flex-col justify-between min-h-screen relative w-full max-w-full"
                @endif @if(!Route::is('home'))
                class="flex flex-col justify-between min-h-screen relative w-full max-w-full space-y-10 px-4 sm:px-16 xl:px-44"
                @endif>
                <!-- Header -->
                <div @if(Route::is('home')) class="px-4 sm:px-16 xl:px-44"
                    style="background-image: url('{{ asset('images/hero-bg.svg') }}'); background-size: cover; background-position: center;"
                    @endif>
                    @include('layouts.partials.header')

                    <!-- Hero Section -->
                    @yield('hero')
                </div>

                <!-- Main Content -->
                <main>
                    @yield('content')
                </main>

                <!-- Footer -->
                @include('layouts.partials.footer')
            </div>
        </div>
    </div>
</body>

</html>