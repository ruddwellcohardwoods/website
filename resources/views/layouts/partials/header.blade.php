<header class="py-10">
    <div class="mx-auto w-full">
        <nav class="relative z-50">
            <div class="flex justify-between items-center w-full">
                <div class="">
                    <a aria-label="Home" href="/">
                        <img class="h-16 md:h-24 w-auto" src="{{asset('images/logo.png')}}" alt="Wellco Hardwoods">
                    </a>
                </div>
                <div class="hidden md:flex bg-[#F2ECE1]/80 p-3 rounded-full">
                    <div class="md:flex md:gap-x-6 xl:gap-x-8">
                        <a class="inline-block rounded-lg px-2 py-1 text-sm sm:text-base text-slate-700 hover:text-[#755D33]"
                            href="/">
                            Home
                        </a>
                        <a class="inline-block rounded-lg px-2 py-1 text-sm sm:text-base text-slate-700 hover:text-[#755D33]"
                            href="/profiles">
                            Profiles
                        </a>
                        <a class="hidden lg:inline-block rounded-lg px-2 py-1 text-sm sm:text-base text-slate-700 hover:text-[#755D33]"
                            href="/portfolio">
                            Portfolio
                        </a>
                        <a class="hidden lg:inline-block rounded-lg px-2 py-1 text-sm sm:text-base text-slate-700 hover:text-[#755D33]"
                            href="/about">
                            About us
                        </a>
                        <a class="hidden lg:inline-block rounded-lg px-2 py-1 text-sm sm:text-base text-slate-700 hover:text-[#755D33]"
                            href="/contact">
                            Contact us
                        </a>
                    </div>
                </div>
                <div x-data="{ open: false }" class="md:hidden relative inline-block text-left">
                    <div>
                        <button @click="open = !open" type="button"
                            class="flex items-center rounded-full bg-gray-50 text-gray-500 focus:outline-none focus:ring-0"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <span class="sr-only">Open Menu</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="h-12 w-8" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"></path>
                            </svg>
                        </button>
                    </div>
                    <div x-show="open" @click.away="open = false"
                        class="absolute right-0 z-10 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="flex flex-col py-1 justify-center divide-y divide-gray-100" role="none">
                            <!-- Menu items -->
                            <a href="/" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="menu-item-0">Home</a>
                            <a href="/profiles" class="block px-4 py-3 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="menu-item-1">Profiles</a>
                            <a href="/portfolio" class="block px-4 py-3 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="menu-item-2">Portfolio</a>
                            <a href="/about" class="block px-4 py-3 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="menu-item-2">About us</a>
                            <a href="/contact" class="block px-4 py-3 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="menu-item-2">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>