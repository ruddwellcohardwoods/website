{{-- resources/views/filament/profiles/pages/dashboard.blade.php --}}
@extends('layouts.profile')

@section('heading')
<div class="flex justify-center items-center w-full h-full">
    <div class="grid gap-4 text-center w-full md:w-[50%] p-2">
        <div>
            <h1 class="text-4xl font-bold text-gray-900">Our Profiles</h1>
        </div>
        <div>
            <p class="text-lg text-gray-700">Our skilled team of professionals prioritizes precision and quality,
                ensuring every piece of trim meets our high standards.</p>
        </div>
    </div>
</div>
@endsection

@section('searchbar')
<div x-data="{ query: '', open: false, selectedSubcategory: null }" x-init="open = false"
    class="relative mt-2 rounded shadow-sm w-[80%] md:w-[20%]">
    <!-- Search Icon -->
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 4a7 7 0 100 14 7 7 0 000-14zM21 21l-4.35-4.35"></path>
        </svg>
    </div>

    <!-- Search Input -->
    <input type="text" placeholder="Search profiles" x-model="query" x-on:input="open = query.length > 0"
        x-on:focus="open = query.length > 0"
        class="w-full p-2 rounded border border-gray-300 focus:ring-0 focus:border-wellco-brown/80 block py-1.5 pl-10 text-gray-900 ring-gray-300 placeholder:text-gray-400 focus:ring-inset sm:text-sm sm:leading-6">

    <!-- Dropdown Options -->
    <ul x-show="open" x-cloak x-on:click.away="open = false"
        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white text-base shadow-lg ring-opacity-5 focus:outline-none sm:text-sm"
        x-transition role="listbox">
        @foreach($categories as $category)
        @foreach($category->subcategories as $subcategory)
        <li x-show="query.length > 0 && '{{ strtolower($subcategory->name) }}'.includes(query.toLowerCase())"
            x-on:click="window.location.href = '/profiles/dashboard?subcategory_id={{ $subcategory->id }}'"
            class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-gray-100">
            {{ $subcategory->name }}
        </li>
        @endforeach
        @endforeach
    </ul>
</div>
@endsection

@section('sidenav')
<nav class="space-y-2" x-data="{ 
        selectedSubcategoryId: '{{ request()->query('subcategory_id') }}', 
        openCategoryId: null 
    }" x-init="
        if (selectedSubcategoryId) {
            // Find the parent category of the selected subcategory
            openCategoryId = document.querySelector(`[data-subcategory-id='${selectedSubcategoryId}']`)?.closest('[data-category-id]')?.getAttribute('data-category-id');
        }
    ">
    <a href="/profiles" class="block px-4 py-2 text-gray-700 font-bold text-xl">Profiles</a>

    @foreach($categories as $category)
    <div x-data="{ open: openCategoryId == '{{ $category->id }}' }" data-category-id="{{ $category->id }}"
        class="space-y-2 border-b-2">
        <button @@click="open = !open"
            class="flex justify-between items-center w-full px-4 py-3 text-left focus:outline-none font-semibold"
            :class="{ 'text-[#755D33] font-bold': openCategoryId == '{{ $category->id }}', 'text-gray-700 hover:bg-gray-100': openCategoryId != '{{ $category->id }}' }">
            {{ $category->name }}
            <svg :class="{ 'rotate-180': open }"
                class="flex justify-center items-center h-5 w-5 text-gray-500 transition-transform duration-300 ease-in-out"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown for Subcategories -->
        <div x-show="open" class="space-y-2" x-cloak>
            @foreach($category->subcategories as $subcategory)
            <a href="/profiles/dashboard?subcategory_id={{ $subcategory->id }}"
                data-subcategory-id="{{ $subcategory->id }}" class="block px-4 py-3 hover:bg-gray-100 text-[#1D1D1F]/80"
                :class="{ 'bg-[#F2ECE1] text-[#1D1D1F]': selectedSubcategoryId == '{{ $subcategory->id }}' }">
                {{ $subcategory->name }}
            </a>
            @endforeach
        </div>
    </div>
    @endforeach
</nav>
@endsection

@section('main')
<div class="p-4 h-full">
    @if(empty($products))
    <div class="text-center py-16">
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">No Products Available</h2>
        <p class="text-gray-500">
            We don't have any products at the moment. Please check back later.
        </p>
    </div>
    @else
    <div x-data="{ selectedSubcategory: null }">
        <!-- Product List Grid -->
        <ul class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            @foreach($products as $product)
            <!-- Show all products if selectedSubcategory is null, or show products from the selected subcategory -->
            <li x-show="selectedSubcategory === null || {{ $product->sub_category_id }} === selectedSubcategory"
                class="border p-4 rounded-lg bg-white">
                <div class="flex flex-col items-center justify-between h-[30rem]">
                    <!-- Product Image -->
                    <div class="flex-shrink-0 h-[70%] w-full md:w-[90%]">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"
                            class="h-full w-full object-contain rounded-lg" loading="lazy">
                    </div>

                    <div class="h-[20%] w-[90%] flex flex-col justify-center">
                        <h3 class="text-lg font-medium text-gray-800">{{ $product->name }}</h3>
                        <p class="text-gray-500 mt-2">{{ $product->description }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        <!-- Pagination Links -->
        <div class="mt-6">
            {!! $paginationLinks !!}
        </div>
    </div>
    @endif
</div>
@endsection