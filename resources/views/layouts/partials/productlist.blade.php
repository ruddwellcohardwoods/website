<div class="p-4 h-full">
    @if(empty($products))
    <div class="text-center py-16">
        <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <h2 class="text-2xl font-semibold mb-2 text-gray-700">No Profiles Found</h2>
        <p class="text-gray-500 mb-2">
            @if(request()->has('name') || request()->has('subcategory_id'))
                We couldn't find any profiles matching your search criteria.
            @else
                We don't have any profiles at the moment. Please check back later.
            @endif
        </p>
        <p class="text-gray-600 mb-4">
            Can't find what you're looking for? Please <a href="/contact" class="text-[#755D33] hover:text-[#5d4628] font-medium underline">contact us</a> and we'll make it for you.
        </p>
        @if(request()->has('name') || request()->has('subcategory_id'))
        <button onclick="window.location.href='/profiles'" class="inline-flex items-center px-4 py-2 bg-[#755D33] text-white rounded hover:bg-[#5d4628] transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            View All Profiles
        </button>
        @endif
    </div>
    @else
    <div x-data="{ selectedSubcategory: null }">
        <!-- Product List Grid -->
        <ul class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            @foreach($products as $product)
            <!-- Show all products if selectedSubcategory is null, or show products from the selected subcategory -->
            <li x-show="selectedSubcategory === null || {{ $product->sub_category_id }} === selectedSubcategory"
                class="border p-4 rounded-lg bg-white">
                <div class="flex flex-col items-center justify-between h-[26rem] md:h-[24rem]">
                    <!-- Product Image -->
                    <div class="flex-shrink-0 h-[70%] w-full md:w-[90%] gallery-item cursor-pointer">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"
                            class="h-full w-full object-contain rounded-lg" loading="lazy" width="1200" height="1200"
                            onerror="this.onerror=null; this.src='{{ asset(str_replace('storage/optimized/', '', $product->image_url)) }}';">
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
