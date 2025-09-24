@extends('layouts.master')

@section('title', 'Home - Wellco Hardwoods')

@section('hero')
<!-- Hero Section with Large House Image -->
<div class="px-4 sm:px-16 xl:px-44 py-8">
    <div class="relative h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden rounded-lg">
        <img src="{{ asset('images/home/hero.png') }}" alt="Modern House" 
            class="w-full h-full object-cover">
    </div>
</div>
@endsection

@section('content')
<div class="w-full">
    <!-- Exteriors Section -->
    <div class="px-4 sm:px-16 xl:px-44 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Image Left (wider) -->
            <div class="relative lg:col-span-3">
                <img src="{{ asset('images/home/exterior.png') }}" alt="Exteriors" 
                    class="w-full h-[400px] lg:h-[500px] object-cover rounded-lg">
            </div>
            <!-- Content Right -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Exteriors</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    From siding to exterior mouldings, our woodwork blends beauty with resilience to every exterior detail.
                </p>
                <a href="/portfolio" class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-700 transition-colors">
                    View All 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Interiors Section -->
    <div class="px-4 sm:px-16 xl:px-44 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Content Left -->
            <div class="lg:col-span-2 order-2 lg:order-1">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Interiors</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Elevate the comfort and style, our interior craftsmanship shapes the heart of every space.
                </p>
                <a href="/portfolio" class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-700 transition-colors">
                    View All 
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <!-- Image Right (wider) -->
            <div class="relative lg:col-span-3 order-1 lg:order-2">
                <img src="{{ asset('images/home/interior.png') }}" alt="Interiors" 
                    class="w-full h-[400px] lg:h-[500px] object-cover rounded-lg">
            </div>
        </div>
    </div>

    <!-- Commercial Section -->
    <div class="px-4 sm:px-16 xl:px-44 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-center">
            <!-- Image Left (wider) -->
            <div class="relative lg:col-span-3">
                <img src="{{ asset('images/home/commercial.png') }}" alt="Commercial" 
                    class="w-full h-[400px] lg:h-[500px] object-cover rounded-lg">
            </div>
            <!-- Content Right -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">Commercial</h2>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Committed to office quality, our woodwork brings professionalism meets the standard of excellence.
                </p>
                <a href="/portfolio" class="inline-flex items-center text-gray-900 font-semibold hover:text-gray-700 transition-colors">
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
                <div class="grid grid-cols-3 gap-6">
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
                    <p class="text-sm text-gray-700">Showing 6 of 5,000 profiles</p>
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

    <!-- Features Section -->
    <div class="bg-white px-4 sm:px-16 xl:px-44 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                We grow first class talent who then deliver<br>first class products
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Quality and Durability -->
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-[#FFE5CC] rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 1 1 0 000 2H6a2 2 0 00-2 2v6a2 2 0 002 2h2a1 1 0 100-2H6V5z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Quality and Durability</h3>
                <p class="text-gray-600 text-sm">
                    Our wood is crafted for quality and durability, ensuring long-lasting performance for all your projects.
                </p>
            </div>

            <!-- Customer Satisfaction -->
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-[#FFE5CC] rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Customer Satisfaction</h3>
                <p class="text-gray-600 text-sm">
                    Customer satisfaction is our priority, with exceptional service and support in every interaction.
                </p>
            </div>

            <!-- Precision and Craftsmanship -->
            <div class="text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-[#FFE5CC] rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Precision and Craftsmanship</h3>
                <p class="text-gray-600 text-sm">
                    Our wood products are a perfect fit for your projects with expert-level craftsmanship and specifications.
                </p>
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
