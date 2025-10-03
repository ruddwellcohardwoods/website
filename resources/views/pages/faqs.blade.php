@extends('layouts.master')

@section('title', 'FAQs - Wellco Hardwoods')

@section('hero')
<div class="relative w-full py-16 md:py-24">
    <div class="mx-auto w-full px-4 sm:px-16 xl:px-44">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#1D1D1F] mb-6">
                Frequently asked questions
            </h1>
            <p class="text-lg md:text-xl text-[#4E4949]">
                Get answers to frequently asked questions about our<br class="hidden md:block">
                wood products, service and processes.
            </p>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="py-16 md:py-24">
    <div class="mx-auto w-full px-4 sm:px-16 xl:px-44">
        <div class="max-w-4xl mx-auto space-y-4">
            <div x-data="{ open: false }" class="bg-white rounded-lg border border-[#E5D9C3]">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <h3 class="text-lg md:text-xl font-semibold text-[#1D1D1F]">
                        Where is Wellco located?
                    </h3>
                    <svg x-show="!open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <svg x-show="open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-[#4E4949]">
                        Wellco is located at 2755 E Las Vegas St., Colorado Springs, CO 80906.
                    </p>
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white rounded-lg border border-[#E5D9C3]">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <h3 class="text-lg md:text-xl font-semibold text-[#1D1D1F]">
                        What makes Wellco hardwood different from other suppliers?
                    </h3>
                    <svg x-show="!open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <svg x-show="open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-[#4E4949]">
                        Wellco sources the highest quality hardwood with a focus on sustainability and customer satisfaction, setting us apart from other suppliers.
                    </p>
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white rounded-lg border border-[#E5D9C3]">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <h3 class="text-lg md:text-xl font-semibold text-[#1D1D1F]">
                        Where do you source your hardwood?
                    </h3>
                    <svg x-show="!open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <svg x-show="open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-[#4E4949]">
                        We source our wood from sustainable forests located in North America and Europe, ensuring top-quality materials for our customers.
                    </p>
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white rounded-lg border border-[#E5D9C3]">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <h3 class="text-lg md:text-xl font-semibold text-[#1D1D1F]">
                        How do you ensure the quality of your hardwood products?
                    </h3>
                    <svg x-show="!open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <svg x-show="open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-[#4E4949]">
                        We have a strict quality control process from sourcing to final delivery, ensuring that all products meet high standards of durability and beauty.
                    </p>
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white rounded-lg border border-[#E5D9C3]">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <h3 class="text-lg md:text-xl font-semibold text-[#1D1D1F]">
                        What types of hardwood do you offer?
                    </h3>
                    <svg x-show="!open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <svg x-show="open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-[#4E4949]">
                        How do you ensure the quality of your hardwood products?
                    </p>
                </div>
            </div>

            <div x-data="{ open: false }" class="bg-white rounded-lg border border-[#E5D9C3]">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <h3 class="text-lg md:text-xl font-semibold text-[#1D1D1F]">
                        How do you handle shipping and delivery?
                    </h3>
                    <svg x-show="!open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <svg x-show="open" class="w-6 h-6 text-[#1D1D1F] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-[#4E4949]">
                        We offer reliable shipping options to ensure that your products arrive safely and on time. Contact us for specific delivery options.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <p class="text-lg text-[#1D1D1F]">
                Still have questions? <a href="/contact" class="text-[#4E4949] hover:text-[#1D1D1F] font-medium underline">Contact us</a>
            </p>
        </div>
    </div>
</div>
@endsection
