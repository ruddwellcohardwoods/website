@extends('layouts.master')

@section('title', 'Contact Us - Wellco Hardwoods')

@section('content')
<div>
    <div class="grid gap-10 md:gap-3 md:flex w-full md:h-[50%]">
        <div class="flex-1 flex flex-col space-y-10">
            <div class="flex flex-col w-full md:w-[80%] space-y-5">
                <h2 class="text-4xl font-semibold text-gray-900">Contact us</h2>
                <p>Contact us to get started on your next dream project. We’re excited to hear from you and will get
                    back to you as soon as possible.</p>
                <div>
                    <a href="mailto:operations@wellcohardwoods.com"
                        class="group inline-flex items-center justify-center rounded py-3 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-wellco-brown text-white hover:bg-wellco-brown/90 hover:text-slate-100 active:bg-wellco-brown/90 active:text-slate-300 focus-visible:outline-wellco-brown"
                        variant="solid" color="slate">Send an email</a>
                </div>
            </div>
            <div class="flex flex-col space-y-7 pt-6 md:pt-1">
                <div class="flex space-x-6">
                    <div>
                        <img loading="lazy" src="{{ asset('images/contact1.png') }}" alt="contact icon 1"
                            class="max-w-14 max-h-14">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Visit us</h2>
                        <p>
                            2755 E Las Vegas St.
                            <br>
                            Colorado Springs, CO 80906
                        </p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <div>
                        <img loading="lazy" src="{{ asset('images/contact2.png') }}" alt="contact icon 1"
                            class="max-w-14 max-h-14">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Email us</h2>
                        <p>
                            operations@wellcohardwoods.com
                        </p>
                    </div>
                </div>
                <div class="flex space-x-6">
                    <div>
                        <img loading="lazy" src="{{ asset('images/contact3.png') }}" alt="contact icon 1"
                            class="max-w-14 max-h-14">
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900">Have any question?</h2>
                        <p><a href="tel:719-390-3031">719-390-3031</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 pt-6 md:pt-0">
            <div id="map" class="w-full h-[30rem]"></div>
        </div>
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