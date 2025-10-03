<header class="py-6">
    <div class="mx-auto w-full px-4 sm:px-16 xl:px-44">
        <nav class="relative z-50">
            <div class="flex justify-between items-center w-full">
                <div class="">
                    <a aria-label="Home" href="/">
                        <img class="h-12 md:h-16 w-auto" src="{{asset('images/logo.png')}}" alt="Wellco Hardwoods">
                    </a>
                </div>
                <div class="hidden md:flex items-center">
                    <div class="bg-[#F2ECE1]/40 backdrop-blur-sm rounded-lg px-6 py-3">
                        <div class="md:flex md:gap-x-8">
                            <a class="inline-block px-3 py-2 text-base text-[#755D33] hover:text-[#4D3D22] font-medium"
                                href="/">
                                Home
                            </a>
                            <a class="inline-block px-3 py-2 text-base text-[#755D33] hover:text-[#4D3D22] font-medium"
                                href="/gallery">
                                Gallery
                            </a>
                            <a class="inline-block px-3 py-2 text-base text-[#755D33] hover:text-[#4D3D22] font-medium"
                                href="/profiles">
                                Profiles
                            </a>
                            <a class="inline-block px-3 py-2 text-base text-[#755D33] hover:text-[#4D3D22] font-medium"
                                href="/about">
                                Services
                            </a>
                            <div class="relative inline-block text-left" x-data="{ open: false }">
                                <button @click="open = !open" type="button" 
                                    class="inline-flex items-center px-3 py-2 text-base text-[#755D33] hover:text-[#4D3D22] font-medium">
                                    Company
                                    <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" @click.away="open = false" 
                                    class="absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="py-1">
                                        <a href="/about" class="block px-4 py-2 text-sm text-[#755D33] hover:bg-[#F2ECE1]">About us</a>
                                        <a href="/contact" class="block px-4 py-2 text-sm text-[#755D33] hover:bg-[#F2ECE1]">Contact us</a>
                                        <a href="/faqs" class="block px-4 py-2 text-sm text-[#755D33] hover:bg-[#F2ECE1]">FAQs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="md:hidden relative inline-block text-left">
                    <div>
                        <button @click="open = !open" type="button"
                            class="flex items-center rounded-full text-gray-700 focus:outline-none focus:ring-0"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <span class="sr-only">Open Menu</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="h-8 w-8" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 z-10 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="flex flex-col py-1 justify-center divide-y divide-gray-100" role="none">
                            <a href="/" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">Home</a>
                            <a href="/gallery" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">Gallery</a>
                            <a href="/profiles" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">Profiles</a>
                            <a href="/about" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">Services</a>
                            <a href="/about" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">About us</a>
                            <a href="/contact" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">Contact us</a>
                            <a href="/faqs" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
