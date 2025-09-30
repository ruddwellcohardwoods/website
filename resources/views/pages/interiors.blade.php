@extends('layouts.master')

@section('title', 'Interiors')

@section('content')
<div class="min-h-screen">
    <!-- Interiors Header Section -->
    <div class="pt-20 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/home-pattern.jpg') }}');">
        <div class="mx-auto max-w-7xl px-4 text-center">
            <!-- Main Title -->
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Interiors
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed mb-16">
                Tailored for comfort and style, our interior craftsmanship shapes the heart of every space.
            </p>
        </div>
    </div>

    <!-- Interiors Gallery Section -->
    <div class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4">
            <!-- Grid Layout -->
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                
                <!-- Row 1 -->
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/1.png') }}" 
                         alt="Interior Project 1" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/2.png') }}" 
                         alt="Interior Project 2" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/3.png') }}" 
                         alt="Interior Project 3" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Row 2 -->
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/4.png') }}" 
                         alt="Interior Project 4" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/5.png') }}" 
                         alt="Interior Project 5" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/6.png') }}" 
                         alt="Interior Project 6" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Row 3 -->
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/7.png') }}" 
                         alt="Interior Project 7" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/8.png') }}" 
                         alt="Interior Project 8" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/9.png') }}" 
                         alt="Interior Project 9" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Row 4 -->
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/10.png') }}" 
                         alt="Interior Project 10" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/11.png') }}" 
                         alt="Interior Project 11" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/12.png') }}" 
                         alt="Interior Project 12" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <!-- Row 5 -->
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/13.png') }}" 
                         alt="Interior Project 13" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/14.png') }}" 
                         alt="Interior Project 14" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="aspect-[4/3] overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('images/gallery/interiors/15.png') }}" 
                         alt="Interior Project 15" 
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
