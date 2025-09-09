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
                <div class="flex flex-col items-center justify-between h-[26rem] md:h-[24rem]">
                    <!-- Product Image -->
                    <div class="flex-shrink-0 h-[70%] w-full md:w-[90%]">
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