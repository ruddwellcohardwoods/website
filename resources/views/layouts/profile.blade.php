@extends('layouts.master')

@section('title', 'Profiles')

@section('content')
@if ($emptyStateMessage)
<div>
    <p class="text-center text-gray-500 font-semibold text-xl">{{ $emptyStateMessage }}</p>
</div>
@else
<div x-data="profiles" class="min-h-screen flex flex-col space-y-5 mx-auto w-full px-4 sm:px-16 xl:px-44">
    <div class="w-full sm:h-[20vh] bg-[#F2ECE1]">
        @yield('heading')
    </div>
    <div class="flex w-full items-end justify-center md:justify-end px-5">
        @yield('searchbar')
    </div>
    <div class="grid md:flex min-h-[50vh] justify-center mx-auto w-full">
        <div class="md:hidden relative">
            @yield('mobilenav')
        </div>
        <div class="hidden md:flex flex-col overflow-y-auto border-gray-200 bg-gray-50 pr-3
        w-[30vw] md:w-[23vw] xl:w-[17vw]">
            @yield('sidenav')
        </div>
        <div class="flex-1 md:pl-6 w-[80vw] md:w-[90vw] xl:w-[95vw] bg-gray-50 mt-16 md:mt-0">
            @yield('main')
        </div>
    </div>
</div>
@endif
@endsection

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('profiles', () => ({
            productlistHtml: '',
            totalCategories: {{ $categories->count() }},
            query: '', 
            open: false, 
            selectedSubcategory: '{{ request()->query('subcategory_id') }}', // Initialize from URL query
            openCategoryId: null,
            isOpen: false,
            selectedSubcategoryName: 'Profiles',
            filteredProducts: [],
            isLoadingProducts: false,
            isLoadingMain: false,

            init() {
                // On page load, fetch either all products or the subcategory based on URL
                const urlParams = new URLSearchParams(window.location.search);
                const subcategoryId = urlParams.get('subcategory_id');
                const page = urlParams.get('page') || 1;
                this.fetchSubCategory(subcategoryId, page);
            },

            // Function to fetch category data via AJAX
            fetchSubCategory(subcategoryId = null, page = 1) {
                this.selectedSubcategory = subcategoryId;
                this.isLoadingMain = true;
                let url = `/profiles?page=${page}`;
                if (subcategoryId) {
                    url += `&subcategory_id=${subcategoryId}`;
                }

                this.updateUrl(subcategoryId, page);

                // Make AJAX request to load products for the selected subcategory
                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    this.productlistHtml = data.html;
                    this.toggleCategory(data.categoryId); 
                    this.setSelectedSubcategoryName(subcategoryId);
                    this.isOpen = false;
                    this.isLoadingMain = false;
                    // Reinitialize lightbox for new images
                    this.$nextTick(() => {
                        if (window.reinitLightbox) {
                            window.reinitLightbox();
                        }
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    this.isLoadingMain = false;
                });
            },

            // Update the URL with selected subcategory and page
            updateUrl(subcategoryId, page) {
                let url = `/profiles?page=${page}`;
                if (subcategoryId) {
                    url += `&subcategory_id=${subcategoryId}`;
                }
                window.history.pushState(null, '', url);
            },

            // Function to handle pagination (if applicable)
            handlePagination(page) {
                const subcategoryId = this.selectedSubcategory || '';
                this.fetchSubCategory(subcategoryId, page); 
            },

            // Toggle category dropdown open/close
            toggleCategory(categoryId) {
                this.openCategoryId = categoryId;
            },
            // Mobile-specific: Toggle mobile navigation
            toggleMobileNav() {
                this.isOpen = !this.isOpen;
            },
            setSelectedSubcategoryName(subcategoryId) {
                if (!subcategoryId) {
                    this.selectedSubcategoryName = 'Profiles';
                } else {
                    this.selectedSubcategory = subcategoryId;
                    const subcategoryElement = document.querySelector(`[data-subcategory-id='${subcategoryId}']`);
                    this.selectedSubcategoryName = subcategoryElement ? subcategoryElement.textContent : 'Profiles';
                }
            },
            searchProducts() {
                // Show dropdown if there is a query
                this.open = this.query.length > 0;

                // If the query has some text, trigger an AJAX request for products
                if (this.query.length > 0) {
                    this.isLoadingProducts = true;
                    fetch(`/search?query=${encodeURIComponent(this.query)}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.filteredProducts = data.products;
                        this.isLoadingProducts = false;
                    })
                    .catch(error => {
                        this.isLoadingProducts = false;
                    });
                } else {
                    // Clear the product list when there's no search query
                    this.filteredProducts = [];
                }
            },
            openProduct(product) {
                this.isLoadingMain = true;
                // Build the query URL for the AJAX request
                const url = `/profiles?name=${encodeURIComponent(product.name)}`;

                // Make an AJAX request to fetch products by name
                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Update the product list HTML with the response
                    this.productlistHtml = data.html;
                    this.toggleCategory(product.category_id); 
                    this.setSelectedSubcategoryName(product.subcategory_id);
                    this.isLoadingMain = false;
                    // Reinitialize lightbox for new images
                    this.$nextTick(() => {
                        if (window.reinitLightbox) {
                            window.reinitLightbox();
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching products:', error);
                    this.isLoadingMain = false;
                });
            },
            hasMatchingSubcategories() {
                if (!this.query) return false;
                const subcategories = document.querySelectorAll('[data-subcategory-id]');
                const lowerQuery = this.query.toLowerCase();
                for (let sub of subcategories) {
                    if (sub.textContent.toLowerCase().includes(lowerQuery)) {
                        return true;
                    }
                }
                return false;
            },
        }));
    });
</script>
