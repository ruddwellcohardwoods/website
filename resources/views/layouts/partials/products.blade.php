<div class="flex flex-col space-y-6">
    @if(isset($firstSubcategory) && isset($firstSubcategory->name))
    <div class="inline-flex w-full justify-between text-[#4D3D22] font-medium">
        <h2 class="text-2xl text-left font-semibold tracking-tight">
            Profiles in {{ $firstSubcategory->name }}
        </h2>
        <span class="text-sm inline-flex justify-center items-center space-x-2 cursor-pointer">
            <a href="{{ url('/profiles?subcategory_id=' . $firstSubcategory->id) }}" class="hover:text-[#4D3D22]">
                View All
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-[#755D34] cursor-pointer hover:text-gray-600"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </span>
    </div>
    @endif
    <div class="grid sm:flex justify-evenly gap-6 sm:space-x-8 sm:w-[90%] sm:mx-auto">
        @if($paginatedProducts->isNotEmpty())
        @foreach($paginatedProducts as $product)
        <div
            class="grid gap-1 lg:flex lg:flex-col space-y-2 w-[80vw] rounded-md sm:w-[22vw] lg:w-[24vw] xl:w-[27vw] max-w-[26rem] group border bg-white">
            <div class="p-4 h-[22rem]">
                <img loading="lazy" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"
                    class="aspect-square inset-0 h-full w-full object-contain p-5">
            </div>
            <div class="pb-8 flex justify-center">
                <div class="bg-white text-left w-[80%]">
                    <h3 class="text-sm sm:text-base font-semibold text-gray-900">
                        {{ $product->name }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ $product->description ?? 'Available in various colors and sizes' }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <p class="text-center text-gray-500">No products available under this category.</p>
        @endif
    </div>
</div>