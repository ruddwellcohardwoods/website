{{-- resources/views/pages/profiles.blade.php --}}
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
<div class="relative mt-2 rounded shadow-sm w-[80%] md:w-[20%]">
    <!-- Search Icon -->
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 4a7 7 0 100 14 7 7 0 000-14zM21 21l-4.35-4.35"></path>
        </svg>
    </div>

    <!-- Search Input -->
    <input type="text" placeholder="Search profiles" x-model="query" x-on:input="searchProducts()"
        x-on:focus="open = query.length > 0"
        class="w-full p-2 rounded border border-gray-300 focus:ring-0 focus:border-wellco-brown/80 block py-1.5 pl-10 text-gray-900 ring-gray-300 placeholder:text-gray-400 focus:ring-inset sm:text-sm sm:leading-6">

    <!-- Dropdown Options -->
    <ul x-show="open" x-cloak x-on:click.away="open = false"
        class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white text-base shadow-lg ring-opacity-5 focus:outline-none sm:text-sm"
        x-transition role="listbox">
        <!-- Section for 'In Categories' -->
        @foreach($categories as $category)
        @foreach($category->subcategories as $subcategory)
        <li x-show="query.length > 0 && '{{ strtolower($subcategory->name) }}'.includes(query.toLowerCase())"
            @click.prevent="fetchSubCategory({{ $subcategory->id }})"
            class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-gray-100">
            {{ $subcategory->name }}
        </li>
        @endforeach
        @endforeach

        <!-- Show filtered products from server -->
        <template x-for="product in filteredProducts" :key="product.id">
            <li @click.prevent="openProduct(product)"
                class="relative cursor-pointer select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-gray-100">
                <span x-text="product.name"></span>
            </li>
        </template>

        <!-- Loading state -->
        <li x-show="isLoadingProducts" class="text-gray-500 text-center py-2">
            Loading...
        </li>

        <!-- Empty state when no results found -->
        <li x-show="!isLoadingProducts && query.length > 0 && filteredProducts.length === 0 && !hasMatchingSubcategories()"
            class="text-gray-500 text-center py-4 px-3">
            <svg class="mx-auto h-8 w-8 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <p class="text-sm mb-1">No profiles found</p>
            <p class="text-xs text-gray-600">
                <a href="/contact" class="text-[#755D33] hover:text-[#5d4628] font-medium underline">Contact us</a> to make it for you
            </p>
        </li>
    </ul>

</div>
@endsection

@section('sidenav')
<nav class="space-y-2">
    <a href="/profiles" @click.prevent="fetchSubCategory(); selectedSubcategory = null; openCategoryId = null;"
        class="block px-4 py-2 text-gray-700 font-bold text-xl">Profiles</a>

    @foreach($categories as $category)
    <div data-category-id="{{ $category->id }}" class="space-y-2 border-b-2">
        <!-- Category Button -->
        <button @click.prevent="toggleCategory('{{ $category->id }}')"
            class="flex justify-between items-center w-full px-4 py-3 text-left focus:outline-none font-semibold"
            :class="openCategoryId == '{{ $category->id }}' ? 'text-[#755D33] bg-gray-100 font-bold' : 'text-gray-700 hover:bg-gray-100'">
            {{ $category->name }}
            <svg :class="{ 'rotate-180': openCategoryId == '{{ $category->id }}' }"
                class="flex justify-center items-center h-5 w-5 text-gray-500 transition-transform duration-300 ease-in-out"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown for Subcategories -->
        <div x-show="openCategoryId == '{{ $category->id }}'" class="space-y-2" x-cloak>
            @foreach($category->subcategories as $subcategory)
            <a href="/profiles?subcategory_id={{ $subcategory->id }}"
                @click.prevent="fetchSubCategory({{ $subcategory->id }});" data-subcategory-id="{{ $subcategory->id }}"
                class="block px-4 py-3 hover:bg-[#F2ECE1] text-[#1D1D1F]/80"
                :class="{ 'bg-[#F2ECE1] text-[#1D1D1F]': selectedSubcategory == '{{ $subcategory->id }}' }">
                {{ $subcategory->name }}
            </a>
            @endforeach
        </div>
    </div>
    @endforeach
</nav>
@endsection

@section('mobilenav')
<div class="absolute w-full flex flex-col items-center">
    <!-- Mobile Nav Trigger -->
    <button @click="toggleMobileNav"
        class="w-[90%] sm:w-[80%] rounded px-4 py-3 bg-[#755D33] text-white flex justify-between items-center">
        <span class="text-lg font-bold" x-text="selectedSubcategoryName || 'Profiles'"></span>
        <svg :class="{ 'rotate-180': isOpen }" class="h-5 w-5 transition-transform duration-300 ease-in-out"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Mobile Nav Content -->
    <nav x-show="isOpen" class="space-y-2 bg-white shadow-lg px-4 py-2 w-[90%] sm:w-[80%]" x-cloak>
        <a href="/profiles" @click.prevent="fetchSubCategory(); selectedSubcategory = null; openCategoryId = null;"
            class="block py-2 text-gray-700 font-bold">All</a>

        @foreach($categories as $category)
        <div class="space-y-2">
            <button @click.prevent="toggleCategory('{{ $category->id }}')"
                class="flex justify-between items-center w-full px-4 py-3 text-left focus:outline-none font-semibold"
                :class="openCategoryId == '{{ $category->id }}' ? 'text-[#755D33] bg-gray-100 font-bold' : 'text-gray-700 hover:bg-gray-100'">
                {{ $category->name }}
                <svg :class="{ 'rotate-180': openCategoryId == '{{ $category->id }}' }"
                    class="flex justify-center items-center h-5 w-5 text-gray-500 transition-transform duration-300 ease-in-out"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown for Subcategories on Mobile -->
            <div x-show="openCategoryId == '{{ $category->id }}'" class="space-y-2" x-cloak>
                @foreach($category->subcategories as $subcategory)
                <a href="/profiles?subcategory_id={{ $subcategory->id }}"
                    @click.prevent="fetchSubCategory({{ $subcategory->id }});"
                    data-subcategory-id="{{ $subcategory->id }}"
                    class="block px-4 py-2 hover:bg-[#F2ECE1] text-[#1D1D1F]/80"
                    :class="{ 'bg-[#F2ECE1] text-[#1D1D1F]': selectedSubcategory == '{{ $subcategory->id }}' }">
                    {{ $subcategory->name }}
                </a>
                @endforeach
            </div>
        </div>
        @endforeach
    </nav>
</div>
@endsection

@section('main')
<!-- Loading State -->
<div x-show="isLoadingMain" x-cloak class="flex items-center justify-center min-h-[50vh]">
    <div class="text-center">
        <svg class="animate-spin h-12 w-12 text-[#755D33] mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <p class="text-gray-600 text-lg">Loading profiles...</p>
    </div>
</div>

<!-- Product List Container -->
<div x-show="!isLoadingMain" id="productlist-container" x-html="productlistHtml">
    @include('layouts.partials.productlist', ['products' => $products, 'paginationLinks' =>
    $paginationLinks])
</div>
@endsection
