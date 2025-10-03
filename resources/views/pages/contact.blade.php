@extends('layouts.master')

@section('title', 'Contact Us - Wellco Hardwoods')

@section('content')
<div class="mx-auto w-full px-4 sm:px-16 xl:px-44 py-12">
    <!-- Centered Header Section -->
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Contact us</h1>
        <p class="text-gray-600 text-lg">We're just a message away, and we'd love to hear from you.</p>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <!-- Left Column - Let's talk! -->
        <div class="flex flex-col space-y-10">
            <div class="flex flex-col space-y-5">
                <h2 class="text-3xl font-bold text-gray-900">Let's talk!</h2>
                <p class="text-gray-600 leading-relaxed">
                    We're a wholesale supplier and do not sell directly to individual homeowners or retail customers. If you're a business, please fill out our customer application, and we'll gladly share pricing and product info.
                </p>
            </div>
            
            <div class="flex flex-col space-y-7">
                <!-- Email us -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <img loading="lazy" src="{{ asset('images/contact2.png') }}" alt="Email icon" class="w-12 h-12">
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Email us</h3>
                        <p class="text-gray-600">sales@wellcohardwoods.com</p>
                    </div>
                </div>

                <!-- Have any question? -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <img loading="lazy" src="{{ asset('images/contact3.png') }}" alt="Phone icon" class="w-12 h-12">
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Have any question?</h3>
                        <p class="text-gray-600"><a href="tel:719-390-3031">719-390-3031</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Contact Form -->
        <div class="bg-[#F5F5F0] rounded-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Ready to get started?</h2>
            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <input 
                        type="text" 
                        name="company_name" 
                        id="company_name" 
                        placeholder="Company name"
                        class="w-full px-4 py-3 border-0 rounded-md bg-white text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-wellco-brown"
                        required
                    >
                </div>
                
                <div>
                    <input 
                        type="email" 
                        name="company_email" 
                        id="company_email" 
                        placeholder="Company email address"
                        class="w-full px-4 py-3 border-0 rounded-md bg-white text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-wellco-brown"
                        required
                    >
                </div>
                
                <div>
                    <input 
                        type="text" 
                        name="subject" 
                        id="subject" 
                        placeholder="Subject"
                        class="w-full px-4 py-3 border-0 rounded-md bg-white text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-wellco-brown"
                        required
                    >
                </div>
                
                <div>
                    <textarea 
                        name="message" 
                        id="message" 
                        rows="5" 
                        placeholder="Type your message here"
                        class="w-full px-4 py-3 border-0 rounded-md bg-white text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-wellco-brown resize-none"
                        required
                    ></textarea>
                </div>
                
                <div>
                    <button 
                        type="submit"
                        class="w-full bg-wellco-brown text-white font-semibold py-3 px-6 rounded-md hover:bg-wellco-brown/90 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-wellco-brown focus:ring-offset-2"
                    >
                        Send a message
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Full Width Map Section -->
    <div class="w-full">
        <div id="map" class="w-full h-[400px] md:h-[500px] rounded-lg shadow-lg"></div>
    </div>
</div>
@endsection

<!-- Include Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<!-- Include Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const map = L.map('map').setView([38.782857, -104.77893], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([38.782857, -104.77893]).addTo(map)
            .bindPopup('Wellco Hardwoods, Colorado Springs')
            .openPopup();
    });
</script>
