@extends('layouts.master')

@section('title', 'Portfolio - Wellco Hardwoods')

@section('content')
<div x-data="portfolio" class="min-h-screen flex flex-col space-y-5 mx-auto w-full"
    x-init="fetchWoodDetails('{{ $woodTypesNames[0][0] }}')">
    <div class="w-full sm:h-[20vh] bg-[#F2ECE1]">
        <div class="flex justify-center items-center w-full h-full">
            <div class="grid gap-4 text-center w-full md:w-[50%] p-2">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">Portfolio</h1>
                </div>
                <div>
                    <p class="text-lg text-gray-700">Explore our diverse selection of premium wood types, showcasing the
                        finest materials for your next project.</p>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ expanded: false }" class="w-full sm:h-[20vh] sm:flex sm:items-center">

        <div class="grid grid-cols-2 gap-4 sm:hidden">
            @foreach ($woodTypesNames as $index => $woodName)
            @if ($index < ceil(count($woodTypesNames) / 2)) <div class="flex-1 flex flex-col space-y-2">
                @foreach ($woodName as $wood)
                <div class="cursor-pointer hover:text-wellco-brown text-lg font-medium"
                    :class="{'text-wellco-brown font-semibold': selectedWood && selectedWood.name === '{{ $wood }}', 'hover:text-wellco-brown text-lg': true}"
                    @click="fetchWoodDetails('{{ $wood }}')">
                    {{ $wood }}
                </div>
                @endforeach
        </div>
        @endif
        @endforeach
    </div>

    <div x-show="expanded" class="grid grid-cols-2 gap-4 sm:hidden mt-4">
        @foreach ($woodTypesNames as $index => $woodName)
        @if ($index >= ceil(count($woodTypesNames) / 2))
        <div class="flex-1 flex flex-col space-y-2">
            @foreach ($woodName as $wood)
            <div class="cursor-pointer hover:text-wellco-brown text-lg font-medium"
                :class="{'text-wellco-brown font-semibold': selectedWood && selectedWood.name === '{{ $wood }}', 'hover:text-wellco-brown text-lg': true}"
                @click="fetchWoodDetails('{{ $wood }}')">
                {{ $wood }}
            </div>
            @endforeach
        </div>
        @endif
        @endforeach
    </div>

    <!-- Show More/Show Less button, only shown on mobile -->
    <div class="pt-4 sm:hidden">
        <div class="col-span-2 flex justify-center pt-4">
            <button @click="expanded = !expanded" class="text-wellco-brown focus:outline-none">
                <template x-if="!expanded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </template>
                <template x-if="expanded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </template>
            </button>
        </div>
    </div>

    <!-- Desktop layout, flex, all items shown -->
    <div class="hidden sm:flex sm:flex-wrap sm:space-x-4 sm:w-full">
        @foreach ($woodTypesNames as $woodName)
        <div class="flex-1 flex flex-col space-y-2">
            @foreach ($woodName as $wood)
            <div class="cursor-pointer hover:text-wellco-brown text-lg font-medium"
                :class="{'text-wellco-brown font-semibold': selectedWood && selectedWood.name === '{{ $wood }}', 'hover:text-wellco-brown text-lg': true}"
                @click="fetchWoodDetails('{{ $wood }}')">
                {{ $wood }}
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>

<hr class="my-8">

<template x-if="selectedWood">
    <div class="w-full grid gap-4">
        <!-- For mobile view, only show one image -->
        <div class="sm:hidden">
            <img loading="lazy" :src="'/images/' + selectedWood.images[0]" :alt="selectedWood.name + ' supplies'"
                class="object-cover w-full max-h-[18rem]">
        </div>

        <div>
            <h2 class="text-2xl font-bold text-wellco-brown" x-text="selectedWood.name"></h2>
        </div>

        <div class="sm:flex w-full justify-between">
            <div class="w-full sm:w-[50%] flex flex-col space-y-4 h-full justify-between">
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Other names</h2>
                    <p x-text="selectedWood.other_names"></p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Description</h2>
                    <p x-text="selectedWood.description"></p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Appearance</h2>
                    <p x-text="selectedWood.appearance"></p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Physical Properties</h2>
                    <p x-text="selectedWood.physical_properties"></p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Working Properties</h2>
                    <p x-text="selectedWood.working_properties"></p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Uses</h2>
                    <p x-text="selectedWood.uses"></p>
                </div>
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold text-gray-700">Availability</h2>
                    <p x-text="selectedWood.availability"></p>
                </div>
            </div>

            <!-- Display wood type images for larger screens -->
            <div class="hidden w-[35%] sm:flex flex-col space-y-4 items-end">
                <template x-for="image in selectedWood.images">
                    <div>
                        <img loading="lazy" :src="'/images/' + image" :alt="selectedWood.name + ' supplies'"
                            class="object-cover max-w-[16rem] max-h-[18rem]">
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>

<!-- Divider -->
<hr class="my-8">
</div>
@endsection

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('portfolio', () => ({
            selectedWood: null,
            expanded: false,

            // Fetch wood details from the server
            async fetchWoodDetails(woodName) {
                try {
                    const response = await fetch(`/portfolio/${woodName}`);
                    const data = await response.json();
                    this.selectedWood = data;
                } catch (error) {
                    console.error("Error fetching wood details:", error);
                }
            }
        }));
    });
</script>