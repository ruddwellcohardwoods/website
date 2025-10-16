@extends('layouts.master')

@section('title', 'Gallery')

@section('content')
<div class="min-h-screen">
    <!-- Gallery Header Section -->
    <div class="pt-20 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/home-pattern.jpg') }}');">
        <div class="mx-auto max-w-7xl px-4 text-center">
            <!-- Main Title -->
            <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                Gallery
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                From warm interiors to bold exteriors and commercial elegance, see how our woodwork brings ideas to life.
            </p>
        </div>
    </div>

    <!-- Gallery Cards Section -->
    <div class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                
                <!-- Interiors Card -->
                <a href="{{ route('interiors') }}" class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105 cursor-pointer block">
                    <div class="aspect-[4/3] relative">
                        <img src="{{ asset('images/home/interior.png') }}" 
                             alt="Interiors" 
                             class="w-full h-full object-cover">
                        
                        <!-- Glass Overlay -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
                            <div class="backdrop-blur-sm bg-white/10 border-t border-white/20">
                                <div class="px-8 py-6 flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold text-white">Interiors</h3>
                                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform duration-300" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Exteriors Card -->
                <a href="{{ route('exteriors') }}" class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105 cursor-pointer block">
                    <div class="aspect-[4/3] relative">
                        <img src="{{ asset('images/home/exterior.png') }}" 
                             alt="Exteriors" 
                             class="w-full h-full object-cover">
                        
                        <!-- Glass Overlay -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
                            <div class="backdrop-blur-sm bg-white/10 border-t border-white/20">
                                <div class="px-8 py-6 flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold text-white">Exteriors</h3>
                                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform duration-300" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Commercial Card -->
                <a href="{{ route('commercial') }}" class="group relative overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:scale-105 cursor-pointer block">
                    <div class="aspect-[4/3] relative">
                        <img src="{{ asset('images/home/commercial.png') }}" 
                             alt="Commercial" 
                             class="w-full h-full object-cover">
                        
                        <!-- Glass Overlay -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent">
                            <div class="backdrop-blur-sm bg-white/10 border-t border-white/20">
                                <div class="px-8 py-6 flex items-center justify-between">
                                    <h3 class="text-2xl font-semibold text-white">Commercial</h3>
                                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform duration-300" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
