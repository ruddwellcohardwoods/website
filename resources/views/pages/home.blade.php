@extends('layouts.master')

@section('title', 'Home - Wellco Hardwoods')

@section('hero')
<div class="mx-auto max-w-full text-center">
    <div class="relative w-full">
        <div class="px-4 sm:px-6 lg:px-8 py-16">
            <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-zinc-800">
                <b class="uppercase text-6xl font-bold text-wellco-brown">Hardwood</b> built beautifully
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg tracking-tight text-gray-600">
                Wellco Hardwoods turns raw lumber into high-quality trim and moulded finished products, making us
                the leading
                supplier for contractors, cabinet makers and woodworkers.
            </p>
            <div class="mt-10 flex justify-center gap-x-6">
                <a class="group inline-flex items-center justify-center rounded py-3 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-wellco-brown text-white hover:bg-wellco-brown/90 hover:text-slate-100 active:bg-wellco-brown/90 active:text-slate-300 focus-visible:outline-wellco-brown"
                    variant="solid" color="slate" href="/profiles">Shop our profiles</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="mx-auto max-w-full text-center" x-data="home">
    <div class="flex flex-col items-center justify-center">
        <div class="w-full"
            style="background-image: url('{{ asset('images/hero-bg.svg') }}'); background-size: cover; background-position: center;">
            <div>
                <div class="w-full h-56">
                    <img loading="lazy" src="{{ asset('images/wood.png') }}" alt="Wood"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        @if($categories->isNotEmpty() && $paginatedProducts->isNotEmpty())
        <div class="bg-[#F2ECE1] w-full p-5 pt-8 pb-16 px-4 sm:px-16 xl:px-44">
            <div class="mt-16 sm:mt-20">
                <div class="w-full flex flex-col space-y-16">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                            Our Profiles
                        </h2>
                        <p class="mx-auto mt-6 max-w-xl text-lg tracking-tight text-gray-600">
                            Our knowledgeable team is here to
                            assist you in choosing the right moulding trim for your project and answer any questions
                            you may have.
                        </p>
                    </div>
                    <div>
                        <!-- Mobile view: Dropdown for selecting categories -->
                        <div class="sm:hidden">
                            <label for="tabs" class="sr-only">Select a category</label>
                            <select id="tabs" name="tabs" @change="fetchCategory($event.target.value)"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" :selected="activeCategoryId == {{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Desktop view: Tab navigation for categories -->
                        <div class="hidden sm:block">
                            <div class="bg-white rounded-l-full rounded-r-full">
                                <nav class="isolate flex items-center justify-start w-full rounded-l-full rounded-r-full shadow-md "
                                    aria-label="Tabs">
                                    <div class="flex items-center w-full justify-between space-x-5 p-3">
                                        <div>
                                            @foreach ($categories->skip(0)->take(6) as $category)
                                            <button @click="fetchCategory({{ $category->id }})"
                                                data-category-id="{{ $category->id }}"
                                                :class="activeCategoryId == {{ $category->id }} ? 'bg-[#4D3D22] text-white' : 'bg-white text-gray-500'"
                                                class="category-link group relative min-w-44 max-w-44 flex-1 rounded-l-full rounded-r-full overflow-hidden py-3 px-3 lg:px-4 lg:py-5 text-center text-sm font-medium hover:bg-wellco-brown/90 hover:text-white focus:z-10">
                                                <span>{{ $category->name }}</span>
                                            </button>
                                            @endforeach
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-9 w-9 lg:h-10 lg:w-10 text-[#4D3D22] hover:text-[#4D3D22] focus:z-10 cursor-pointer border-2 border-wellco-brown/80 hover:border-[#4D3D22]/70 p-1 rounded-full"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="products-container" class="mt-16 sm:mt-20" x-html="productsHtml">
                @if($paginatedProducts->isNotEmpty())
                @include('layouts.partials.products', ['paginatedProducts' => $paginatedProducts, 'paginationLinks' =>
                $paginationLinks, 'firstSubcategory' => $firstSubcategory])
                @else
                <p class="text-center text-gray-500">No products available under this category.</p>
                @endif
            </div>

            <div class="mt-12 flex justify-center space-x-3 py-4">
                <!-- Previous Button -->
                <button id="previousCategoryButton" @click="fetchCategory(activeCategoryId - 1)"
                    :disabled="activeCategoryId <= {{ $categories->first()->id }}"
                    class="flex items-center category-link-navigation"
                    :class="activeCategoryId <= {{ $categories->first()->id }} ? 'text-gray-300 cursor-not-allowed border-gray-300' : 'text-wellco-brown/80 border-wellco-brown hover:text-[#4D3D22]/70 hover:border-[#4D3D22]/70'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 border-2 border-inherit p-2 rounded-full"
                        fill="none" viewBox="0 0 24 24" stroke=" CurrentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Next Button -->
                <button id="nextCategoryButton" @click="fetchCategory(activeCategoryId + 1)"
                    :disabled="activeCategoryId >= {{ $categories->last()->id }}"
                    class="flex items-center category-link-navigation"
                    :class="activeCategoryId >= {{ $categories->last()->id }} ? 'text-gray-300 cursor-not-allowed border-gray-300' : 'text-wellco-brown/80 border-wellco-brown hover:text-[#4D3D22]/70 hover:border-[#4D3D22]/70'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 border-2 border-inherit  p-1 rounded-full"
                        fill="none" viewBox="0 0 24 24" stroke=" CurrentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>


            <div class="mt-10 flex justify-center gap-x-6">
                <a class="group inline-flex items-center justify-center rounded py-3 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-wellco-brown text-white hover:bg-wellco-brown/90 hover:text-slate-100 active:bg-wellco-brown/90 active:text-slate-300 focus-visible:outline-wellco-brown"
                    variant="solid" color="slate" href="/profiles">Explore all profiles</a>
            </div>
        </div>
        @endif

        <div class="px-4 sm:px-16 xl:px-44">
            <div class="mt-16 sm:mt-20">
                <div class="w-full text-gray-900">
                    <div class="flex flex-col space-y-16">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                            Why choose wellco?
                        </h2>
                        <div class="grid gap-8 sm:inline-flex w-full sm:justify-between sm:space-x-10">
                            <div class="flex flex-col flex-1 space-y-8 text-left">
                                <div class="mx-auto sm:mx-0 flex-1">
                                    <img loading="lazy" src="{{ asset('images/icon1.png') }}" alt="Icon 1"
                                        class="w-16 h-16">
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-center sm:text-left text-2xl font-semibold tracking-tight">
                                        Quality and Durability
                                    </h2>
                                </div>
                                <div class="flex-1 flex items-start justify-start">
                                    <p class="tracking-tight text-gray-600">
                                        Our wood is crafted for quality and durability, ensuring long-lasting
                                        performance
                                        for
                                        all
                                        your projects.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 space-y-8 text-left">
                                <div class="mx-auto sm:mx-0 flex-1">
                                    <img loading="lazy" src="{{ asset('images/icon2.png') }}" alt="Icon 2"
                                        class="w-16 h-16">
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-center sm:text-left text-2xl font-semibold tracking-tight">
                                        Customer Satisfaction
                                    </h2>
                                </div>
                                <div class="flex-1">
                                    <p class="tracking-tight text-gray-600">
                                        Customer satisfaction is at the core of our business. We strive to provide
                                        excellent
                                        service and support in every interaction and order.
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 space-y-8 text-left">
                                <div class="mx-auto sm:mx-0 flex-1">
                                    <img loading="lazy" src="{{ asset('images/icon3.png') }}" alt="Icon 3"
                                        class="w-16 h-16">
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-center sm:text-left text-2xl font-semibold tracking-tight">
                                        Precision and Craftmanship
                                    </h2>
                                </div>
                                <div class="flex-1">
                                    <p class="tracking-tight text-gray-600">
                                        Our wood is crafted for quality and durability, ensuring long-lasting
                                        performance
                                        for
                                        all
                                        your projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 md:mt-32 w-full">
                <div class="md:w-[95%] mx-auto text-gray-900">
                    <div class="flex flex-col space-y-16">
                        <div>
                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                                Frequently asked questions
                            </h2>
                            <p class="mx-auto mt-6 max-w-xl text-lg tracking-tight text-gray-600">
                                Get answers to frequently asked questions about our wood products, service and
                                processes.
                            </p>
                        </div>
                        <div class="flex w-full justify-center text-left">
                            <ul role="list" class="space-y-2 w-full">
                                <li x-data="{ open: false }" class="cursor-pointer w-full">
                                    <div @click="open = !open"
                                        class="h-auto sm:h-16 inline-flex w-full items-left justify-between rounded-md bg-[#F2ECE1]/20 px-6 py-4 shadow-sm font-semibold border border-[#D8C6A6]">
                                        <p>Where is Wellco located?</p>
                                        <span :class="{'rotate-45': open}" class="transition-transform duration-300">
                                            <svg class="w-6 h-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0001 6.66699V25.3337M6.66675 16.0003H25.3334"
                                                    stroke="#1D1D1F" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div x-show="open" class="px-6 py-4 text-gray-700">
                                        <p>Wellco is located at 2755 E Las Vegas St., Colorado Springs, CO 80906.</p>
                                    </div>
                                </li>

                                <li x-data="{ open: false }" class="cursor-pointer w-full">
                                    <div @click="open = !open"
                                        class="h-auto sm:h-16 inline-flex w-full items-center justify-between rounded-md bg-[#F2ECE1]/20 px-6 py-4 shadow-sm font-semibold border border-[#D8C6A6]">
                                        <p>What makes Wellco hardwood different from other suppliers?</p>
                                        <span :class="{'rotate-45': open}" class="transition-transform duration-300">
                                            <svg class="w-6 h-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0001 6.66699V25.3337M6.66675 16.0003H25.3334"
                                                    stroke="#1D1D1F" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div x-show="open" class="px-6 py-4 text-gray-700">
                                        <p>Wellco sources the highest quality hardwood with a focus on sustainability
                                            and customer satisfaction, setting us apart from other suppliers.</p>
                                    </div>
                                </li>

                                <li x-data="{ open: false }" class="cursor-pointer w-full">
                                    <div @click="open = !open"
                                        class="h-auto sm:h-16 inline-flex w-full items-center justify-between rounded-md bg-[#F2ECE1]/20 px-6 py-4 shadow-sm font-semibold border border-[#D8C6A6]">
                                        <p>Where do you source your wood?</p>
                                        <span :class="{'rotate-45': open}" class="transition-transform duration-300">
                                            <svg class="w-6 h-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0001 6.66699V25.3337M6.66675 16.0003H25.3334"
                                                    stroke="#1D1D1F" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div x-show="open" class="px-6 py-4 text-gray-700">
                                        <p>We source our wood from sustainable forests located in North America and
                                            Europe, ensuring top-quality materials for our customers.</p>
                                    </div>
                                </li>

                                <li x-data="{ open: false }" class="cursor-pointer w-full">
                                    <div @click="open = !open"
                                        class="h-auto sm:h-16 inline-flex w-full items-center justify-between rounded-md bg-[#F2ECE1]/20 px-6 py-4 shadow-sm font-semibold border border-[#D8C6A6]">
                                        <p>How do you ensure the quality of your hardwood products?</p>
                                        <span :class="{'rotate-45': open}" class="transition-transform duration-300">
                                            <svg class="w-6 h-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0001 6.66699V25.3337M6.66675 16.0003H25.3334"
                                                    stroke="#1D1D1F" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div x-show="open" class="px-6 py-4 text-gray-700">
                                        <p>We have a strict quality control process from sourcing to final delivery,
                                            ensuring that all products meet high standards of durability and beauty.</p>
                                    </div>
                                </li>

                                <li x-data="{ open: false }" class="cursor-pointer w-full">
                                    <div @click="open = !open"
                                        class="h-auto sm:h-16 inline-flex w-full items-center justify-between rounded-md bg-[#F2ECE1]/20 px-6 py-4 shadow-sm font-semibold border border-[#D8C6A6]">
                                        <p>What types of hardwood do you offer?</p>
                                        <span :class="{'rotate-45': open}" class="transition-transform duration-300">
                                            <svg class="w-6 h-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0001 6.66699V25.3337M6.66675 16.0003H25.3334"
                                                    stroke="#1D1D1F" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div x-show="open" class="px-6 py-4 text-gray-700">
                                        <p>We offer a variety of hardwoods, including oak, maple, cherry, walnut, and
                                            more.</p>
                                    </div>
                                </li>

                                <li x-data="{ open: false }" class="cursor-pointer w-full">
                                    <div @click="open = !open"
                                        class="h-auto sm:h-16 inline-flex w-full items-center justify-between rounded-md bg-[#F2ECE1]/20 px-6 py-4 shadow-sm font-semibold border border-[#D8C6A6]">
                                        <p>How do you handle shipping and delivery?</p>
                                        <span :class="{'rotate-45': open}" class="transition-transform duration-300">
                                            <svg class="w-6 h-6" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0001 6.66699V25.3337M6.66675 16.0003H25.3334"
                                                    stroke="#1D1D1F" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div x-show="open" class="px-6 py-4 text-gray-700">
                                        <p>We offer reliable shipping options to ensure that your products arrive safely
                                            and on time. Contact us for specific delivery options.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="mt-16 sm:mt-32 text-white">
                <div class="flex items-center justify-center w-full h-72 bg-[#4D3D22] px-5">
                    <div class="flex flex-col items-center justify-center space-y-5">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl sm:max-w-xl">
                            Ready to elevate your next project?
                        </h2>
                        <p class="mx-auto mt-6 max-w-xl text-lg tracking-tight sm:max-w-lg">
                            Explore our premium wood profiles and experience quality craftmanship.
                        </p>
                        <a class="group inline-flex items-center justify-center max-w-32 rounded py-3 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-wellco-brown text-white hover:bg-wellco-brown/90 hover:text-slate-100 active:bg-wellco-brown/90 active:text-slate-300 focus-visible:outline-wellco-brown"
                            variant="solid" color="slate" href="/profiles">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('home', () => ({
            activeCategoryId: null,
            productsHtml: '',
            totalCategories: {{ $categories->count() }},

            init() {
                if (this.totalCategories > 0) {
                    this.activeCategoryId = {{ $categories->first()->id ?? 'null' }};
                    this.fetchCategory(this.activeCategoryId);
                }
            },
            
            // Function to fetch category data via AJAX
            fetchCategory(categoryId) {
                if (!categoryId) return;

                const url = `/?category_id=${categoryId}`;
                this.activeCategoryId = categoryId;

                // Make AJAX request to load products for the selected category
                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    this.productsHtml = data.html;
                })
                .catch(error => console.error('Error:', error));
            }
        }));
    });
</script>