@extends('layouts.master')

@section('title', 'Home - Wellco Hardwoods')

@section('hero')
<!-- Hero Carousel Section -->
<div class="px-4 sm:px-16 xl:px-44 py-8" x-data="{
    currentSlide: 0,
    totalSlides: 10,
    autoplayInterval: null,
    init() {
        this.startAutoplay();
    },
    startAutoplay() {
        this.autoplayInterval = setInterval(() => {
            this.nextSlide();
        }, 8000);
    },
    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
        }
    },
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
    },
    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
    },
    goToSlide(index) {
        this.currentSlide = index;
        this.stopAutoplay();
        this.startAutoplay();
    }
}" @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()">
    <div class="relative h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden rounded-lg">
        <!-- Carousel Images -->
        @for ($i = 1; $i <= 10; $i++)
        <div x-show="currentSlide === {{ $i - 1 }}" 
             x-transition:enter="transition ease-out duration-700"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-700"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0">
            <img src="{{ asset('images/hero/' . $i . '.jpg') }}" 
                 alt="Hero Image {{ $i }}"
                 class="w-full h-full object-cover">
        </div>
        @endfor

        <!-- Navigation Arrows -->
        <button @click="prevSlide(); stopAutoplay(); startAutoplay();" 
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all duration-300 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button @click="nextSlide(); stopAutoplay(); startAutoplay();" 
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all duration-300 z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <!-- Dots Indicator -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            @for ($i = 0; $i < 10; $i++)
            <button @click="goToSlide({{ $i }})" 
                    :class="currentSlide === {{ $i }} ? 'bg-white w-8' : 'bg-white/50 w-2'"
                    class="h-2 rounded-full transition-all duration-300">
            </button>
            @endfor
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="w-full">
    <!-- Interiors Section -->
    <div class="px-4 sm:px-16 xl:px-44 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Image Left (wider) -->
            <div class="relative lg:col-span-3">
                <a href="{{ route('interiors') }}">
                    <img src="{{ asset('images/home/interior.png') }}" alt="Interiors" 
                        class="w-full h-[400px] lg:h-[500px] object-cover rounded-lg">
                </a>
            </div>
            <!-- Content Right -->
            <div class="lg:col-span-2 lg:w-[70%] lg:mx-24">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Interiors</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Elevate the comfort and style, our interior craftsmanship shapes the heart of every space.
                </p>
                <a href="{{ route('interiors') }}" class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-700 transition-colors">
                    View All 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>


    <!-- Exteriors Section -->
    <div class="px-4 sm:px-16 xl:px-44 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Content Left -->
            <div class="lg:col-span-2 order-2 lg:order-1 lg:w-[70%] lg:mx-24">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Exteriors</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    From siding to exterior mouldings, our woodwork blends beauty with resilience to every exterior detail.
                </p>
                <a href="{{ route('exteriors') }}" class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-700 transition-colors">
                    View All 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <!-- Image Right (wider) -->
            <div class="relative lg:col-span-3 order-1 lg:order-2">
                <a href="{{ route('exteriors') }}">
                    <img src="{{ asset('images/home/exterior.png') }}" alt="Exteriors" 
                        class="w-full h-[400px] lg:h-[500px] object-cover rounded-lg">
                </a>
            </div>
        </div>
    </div>

    <!-- Commercial Section -->
    <div class="px-4 sm:px-16 xl:px-44 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Image Left (wider) -->
            <div class="relative lg:col-span-3">
                <a href="{{ route('commercial') }}">
                    <img src="{{ asset('images/home/commercial.png') }}" alt="Commercial" 
                        class="w-full h-[400px] lg:h-[500px] object-cover rounded-lg">
                </a>
            </div>
            <!-- Content Right -->
            <div class="lg:col-span-2 lg:w-[70%] lg:mx-24">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Commercial</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Committed to office quality, our woodwork brings professionalism meets the standard of excellence.
                </p>
                <a href="{{ route('commercial') }}" class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-700 transition-colors">
                    View All 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Our Profiles Section -->
    <div class="py-16" style="background: linear-gradient(135deg, #F2ECE1 0%, #F2ECE1 50%, #FAFAFA 100%);">
        <div class="px-4 sm:px-16 xl:px-44">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Profiles</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Our skilled team of professionals produces products on moulders and quality finishing equipment using a broad selection of cutters to best represent.
                </p>
            </div>

            <!-- Profile Container with Background Image -->
            <div class="rounded-lg p-8 max-w-5xl mx-auto" style="background-image: url('{{ asset('images/home/our_profiles.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Profile 1 -->
                    <div class="bg-white rounded-lg p-6 text-center shadow-sm">
                        <div class="h-48 flex items-center justify-center mb-4">
                            <img src="{{ asset('images/profiles/chair_rail01.png') }}" alt="Profile 1" 
                                class="w-auto h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-sm font-semibold text-gray-900">3.813 in</p>
                            <p class="text-xs text-gray-500 leading-tight">0.688 in</p>
                            <p class="text-xs font-medium text-gray-700">40105</p>
                        </div>
                    </div>

                    <!-- Profile 2 -->
                    <div class="bg-white rounded-lg p-6 text-center shadow-sm">
                        <div class="h-48 flex items-center justify-center mb-4">
                            <img src="{{ asset('images/profiles/chair_rail02.png') }}" alt="Profile 2" 
                                class="w-auto h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-sm font-semibold text-gray-900">3.813 in</p>
                            <p class="text-xs text-gray-500 leading-tight">0.688 in</p>
                            <p class="text-xs font-medium text-gray-700">40105</p>
                        </div>
                    </div>

                    <!-- Profile 3 -->
                    <div class="bg-white rounded-lg p-6 text-center shadow-sm">
                        <div class="h-48 flex items-center justify-center mb-4">
                            <img src="{{ asset('images/profiles/chair_rail03.png') }}" alt="Profile 3" 
                                class="w-auto h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-sm font-semibold text-gray-900">3.813 in</p>
                            <p class="text-xs text-gray-500 leading-tight">0.688 in</p>
                            <p class="text-xs font-medium text-gray-700">40105</p>
                        </div>
                    </div>

                    <!-- Profile 4 -->
                    <div class="bg-white rounded-lg p-6 text-center shadow-sm">
                        <div class="h-48 flex items-center justify-center mb-4">
                            <img src="{{ asset('images/profiles/chair_rail04.png') }}" alt="Profile 4" 
                                class="w-auto h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-sm font-semibold text-gray-900">3.813 in</p>
                            <p class="text-xs text-gray-500 leading-tight">0.688 in</p>
                            <p class="text-xs font-medium text-gray-700">40105</p>
                        </div>
                    </div>

                    <!-- Profile 5 -->
                    <div class="bg-white rounded-lg p-6 text-center shadow-sm">
                        <div class="h-48 flex items-center justify-center mb-4">
                            <img src="{{ asset('images/profiles/chair_rail05.png') }}" alt="Profile 5" 
                                class="w-auto h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-sm font-semibold text-gray-900">3.813 in</p>
                            <p class="text-xs text-gray-500 leading-tight">0.688 in</p>
                            <p class="text-xs font-medium text-gray-700">40105</p>
                        </div>
                    </div>

                    <!-- Profile 6 -->
                    <div class="bg-white rounded-lg p-6 text-center shadow-sm">
                        <div class="h-48 flex items-center justify-center mb-4">
                            <img src="{{ asset('images/profiles/chair_rail06.png') }}" alt="Profile 6" 
                                class="w-auto h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-sm font-semibold text-gray-900">3.813 in</p>
                            <p class="text-xs text-gray-500 leading-tight">0.688 in</p>
                            <p class="text-xs font-medium text-gray-700">40105</p>
                        </div>
                    </div>
                </div>

                <!-- Text inside beige container -->
                <div class="text-center mt-8">
                    <p class="text-sm text-gray-700 font-bold">Showing 6 of 5,000 profiles</p>
                </div>
            </div>

            <!-- Button outside container -->
            <div class="text-center mt-8">
                <a href="/profiles" 
                    class="inline-block bg-[#8B6914] text-white px-8 py-3 rounded-md hover:bg-[#7A5C12] transition-colors font-semibold">
                    Explore all profiles
                </a>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-[#4D3D22] py-16">
        <div class="px-4 sm:px-16 xl:px-44 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">
                Ready to elevate your next project?
            </h2>
            <p class="text-gray-200 mb-8 max-w-2xl mx-auto">
                Explore our premium wood profiles and experience quality craftsmanship
            </p>
            <a href="/profiles" 
                class="inline-block bg-white text-gray-900 px-8 py-3 rounded-md hover:bg-gray-100 transition-colors font-semibold">
                Explore all profiles →
            </a>
        </div>
    </div>
</div>
@endsection
