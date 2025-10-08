@extends('layouts.master')

@section('title', 'Exteriors')

@section('content')
<div class="min-h-screen">
    <!-- Exteriors Header Section -->
    <div class="pt-20 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/home-pattern.jpg') }}');">
        <div class="mx-auto max-w-7xl px-4 text-center">
            <!-- Main Title -->
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Exteriors
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed mb-16">
                From siding to outdoor structures, our woodwork blends beauty with resilience in every exterior detail.
            </p>
        </div>
    </div>

    <!-- Exteriors Gallery Section -->
    <div class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4">
            <!-- Masonry Layout -->
            <div class="columns-2 lg:columns-3 gap-4 lg:gap-6">
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/1.png') }}" 
                             alt="Exterior Project 1" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/2.png') }}" 
                             alt="Exterior Project 2" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/3.png') }}" 
                             alt="Exterior Project 3" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/4.png') }}" 
                             alt="Exterior Project 4" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/5.png') }}" 
                             alt="Exterior Project 5" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/6.png') }}" 
                             alt="Exterior Project 6" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/7.png') }}" 
                             alt="Exterior Project 7" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/8.png') }}" 
                             alt="Exterior Project 8" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/9.png') }}" 
                             alt="Exterior Project 9" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>

                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/10.png') }}" 
                             alt="Exterior Project 10" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/11.png') }}" 
                             alt="Exterior Project 11" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>
                
                <div class="break-inside-avoid mb-4 lg:mb-6">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
                        <img src="{{ asset('images/gallery/exteriors/12.png') }}" 
                             alt="Exterior Project 12" 
                             class="w-full h-auto hover:scale-105 transition-transform duration-500"
                             data-gallery="exteriors">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
