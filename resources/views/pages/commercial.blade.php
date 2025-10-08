@extends('layouts.master')

@section('title', 'Commercial')

@section('content')
<div class="min-h-screen">
    <!-- Commercial Header Section -->
    <div class="pt-20 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/home-pattern.jpg') }}');">
        <div class="mx-auto max-w-7xl px-4 text-center">
            <!-- Main Title -->
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Commercial
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed mb-16">
                From retail to office builds, our commercial craftsmanship raises the standard.
            </p>
        </div>
    </div>

    <!-- Commercial Gallery Section -->
    <div class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4">
            <!-- Masonry Layout -->
            <div class="columns-2 lg:columns-3 gap-4 lg:gap-6">
                
                <!-- Please Note Card -->
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="rounded-lg shadow-lg overflow-hidden" style="background: linear-gradient(135deg, #E5D9C3 0%, #F2ECE1 100%);">
                        <div class="flex flex-col justify-center p-6">
                            <h3 class="font-bold text-gray-900 mb-4">Please Note:</h3>
                            <p class="text-sm text-gray-700 mb-4">
                                We do offer more in this area, though not every project is photographed. This gallery provides just a glimpse of what we do.
                            </p>
                            <p class="text-sm text-gray-700">
                                Feel free to <strong>Contact us</strong> if you'd like to know more.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/1.png') }}" 
                             alt="Commercial Project 1" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/2.png') }}" 
                             alt="Commercial Project 2" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/3.png') }}" 
                             alt="Commercial Project 3" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/4.png') }}" 
                             alt="Commercial Project 4" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/5.png') }}" 
                             alt="Commercial Project 5" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/6.png') }}" 
                             alt="Commercial Project 6" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/7.png') }}" 
                             alt="Commercial Project 7" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/8.png') }}" 
                             alt="Commercial Project 8" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/9.png') }}" 
                             alt="Commercial Project 9" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/10.png') }}" 
                             alt="Commercial Project 10" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/11.png') }}" 
                             alt="Commercial Project 11" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/12.png') }}" 
                             alt="Commercial Project 12" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/13.png') }}" 
                             alt="Commercial Project 13" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/commercial/14.png') }}" 
                             alt="Commercial Project 14" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="commercial">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
