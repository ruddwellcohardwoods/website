@extends('layouts.master')

@section('title', 'Services - Wellco Hardwoods')

@section('content')
<div class="sm:py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Hero Section -->
    <div class="text-center py-12 sm:py-16">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
        Our Services
      </h1>
      <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto">
        Our specialized services add value and efficiency at every stage of your project.
      </p>
    </div>

    <!-- Inventory Offering Section -->
    <div class="mb-16">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Inventory offering</h2>
      <p class="text-base text-gray-600 mb-8">
        We provide a downloadable Excel document that contains a comprehensive list of our available wood product. This serves as a reference for customers and partners.
      </p>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Wood species -->
        <div class="bg-wellco-light-beige/20 border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
          <h3 class="text-xl font-bold text-wellco-black mb-3">Wood species</h3>
          <p class="text-wellco-dark-gray">
            A list of all the available types of wood (e.g., oak, maple, mahogany).
          </p>
        </div>

        <!-- Card 2: Product types -->
        <div class="bg-wellco-light-beige/20 border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
          <h3 class="text-xl font-bold text-wellco-black mb-3">Product types</h3>
          <p class="text-wellco-dark-gray">
            Information on forms (e.g., planks, slabs, blocks) and use cases.
          </p>
        </div>

        <!-- Card 3: Dimensions -->
        <div class="bg-wellco-light-beige/20 border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
          <h3 class="text-xl font-bold text-wellco-black mb-3">Dimensions</h3>
          <p class="text-wellco-dark-gray">
            Standard sizes, thicknesses, and lengths of each product.
          </p>
        </div>
      </div>
    </div>

    <!-- Millwork Profiles Section -->
    <div class="mb-16" x-data="{ activeTab: 'baseboards' }">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Millwork Profiles</h2>
      <p class="text-base text-gray-600 mb-8">
        We craft custom profiles for both interior and exterior applications to meet your architectural needs.
      </p>

      <!-- Tabs -->
      <div class="flex flex-wrap gap-2 mb-8">
        <button 
          @click="activeTab = 'baseboards'" 
          :class="activeTab === 'baseboards' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Baseboards
        </button>
        <button 
          @click="activeTab = 'casings'" 
          :class="activeTab === 'casings' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Casings
        </button>
        <button 
          @click="activeTab = 'doorjambs'" 
          :class="activeTab === 'doorjambs' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Door Jambs
        </button>
        <button 
          @click="activeTab = 'windowsills'" 
          :class="activeTab === 'windowsills' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Window Sills
        </button>
        <button 
          @click="activeTab = 'siding'" 
          :class="activeTab === 'siding' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Interior & Exterior Siding
        </button>
        <button 
          @click="activeTab = 'tabletop'" 
          :class="activeTab === 'tabletop' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Tabletop Glue-Up
        </button>
      </div>

      <!-- Masonry Layout -->
      <div class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/1.png') }}" alt="Millwork profile 1" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/2.png') }}" alt="Millwork profile 2" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/3.png') }}" alt="Millwork profile 3" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/4.png') }}" alt="Millwork profile 4" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/5.png') }}" alt="Millwork profile 5" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/6.png') }}" alt="Millwork profile 6" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/7.png') }}" alt="Millwork profile 7" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/8.png') }}" alt="Millwork profile 8" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/9.png') }}" alt="Millwork profile 9" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/10.png') }}" alt="Millwork profile 10" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/11.png') }}" alt="Millwork profile 11" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/12.png') }}" alt="Millwork profile 12" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
      </div>
    </div>

    <!-- Specialty Services Section -->
    <div class="mb-16" x-data="{ activeSpecialtyTab: 'lockmiter' }">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Specialty Services</h2>
      <p class="text-base text-gray-600 mb-8">
        We also offer specialized woodworking and <span class="font-semibold">logistical services</span> to support your builds.
      </p>

      <!-- Specialty Tabs -->
      <div class="flex flex-wrap gap-2 mb-8">
        <button 
          @click="activeSpecialtyTab = 'lockmiter'" 
          :class="activeSpecialtyTab === 'lockmiter' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Lock-Miter Joints
        </button>
        <button 
          @click="activeSpecialtyTab = 'fauxbeam'" 
          :class="activeSpecialtyTab === 'fauxbeam' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Faux Beam Assembly
        </button>
        <button 
          @click="activeSpecialtyTab = 's3s'" 
          :class="activeSpecialtyTab === 's3s' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          S3S (Surfaced 3 Sides)
        </button>
      </div>

      <!-- Specialty Images Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="rounded-lg overflow-hidden shadow-md aspect-[4/3] bg-gray-100 cursor-pointer gallery-item">
          <img src="{{ asset('images/services/footer1.png') }}" alt="Lock-Miter Joints" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="rounded-lg overflow-hidden shadow-md aspect-[4/3] bg-gray-100 cursor-pointer gallery-item">
          <img src="{{ asset('images/services/footer2.png') }}" alt="Faux Beam Assembly" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>
        <div class="rounded-lg overflow-hidden shadow-md aspect-[4/3] bg-gray-100 cursor-pointer gallery-item">
          <img src="{{ asset('images/services/footer3.png') }}" alt="S3S Surfaced 3 Sides" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
