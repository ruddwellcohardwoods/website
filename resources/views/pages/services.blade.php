@extends('layouts.master')

@section('title', 'Services - Wellco Hardwoods')

@section('content')
<div class="sm:py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Hero Section -->
    <div class="text-center py-12 sm:py-16">
      <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-4">
        Our Services
      </h1>
      <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto">
        Our specialized services add value and efficiency at every stage of your project.
      </p>
    </div>

    <!-- Available Wood Species Section -->
    <div class="mb-16" x-data="{ openSpecies: null }">
      <!-- Wood Species Accordion Section -->
      <div class="mt-8">
        
        <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-md">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Available Wood Species</h3>
          <p class="text-gray-600 mb-6">
            Explore our selection of quality hardwoods. Please contact us to confirm current availability and pricing.
          </p>

          <div class="space-y-3">
            <!-- KNOTTY ALDER -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'knotty-alder' ? null : 'knotty-alder'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Knotty Alder</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'knotty-alder' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'knotty-alder'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Knotty Alder features a distinctive character with prominent knots and mineral streaks. Its light reddish-brown color deepens with age. Popular for rustic and traditional designs, it's commonly used in cabinetry, furniture, and interior millwork where a natural, organic appearance is desired.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Knotty Alder sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Knotty Alder sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Knotty Alder sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- SELECT ALDER -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'select-alder' ? null : 'select-alder'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Select Alder</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'select-alder' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'select-alder'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Select Alder is a cleaner grade with fewer knots than Knotty Alder, offering a more uniform appearance. Its fine, even texture and light color make it ideal for staining and finishing. Widely used in fine cabinetry, furniture, and architectural millwork where a refined look is preferred.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Select Alder sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Select Alder sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Select Alder sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- ASH -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'ash' ? null : 'ash'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Ash</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'ash' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'ash'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Ash is known for its exceptional strength and shock resistance, featuring a prominent grain pattern. The wood ranges from light cream to light brown with occasional darker heartwood. Popular for tool handles, sports equipment, furniture, and flooring due to its durability and attractive appearance.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Ash sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Ash sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Ash sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- YELLOW BIRCH -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'yellow-birch' ? null : 'yellow-birch'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Yellow Birch</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'yellow-birch' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'yellow-birch'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Yellow Birch features a light yellow to golden-brown color with a fine, uniform texture. This hard, heavy wood is valued for its strength and attractive grain. Commonly used in flooring, cabinetry, furniture, and turned objects. It takes stains well and can be finished to resemble more expensive woods.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Yellow Birch sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Yellow Birch sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Yellow Birch sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RUSTIC CHERRY -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'rustic-cherry' ? null : 'rustic-cherry'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Rustic Cherry</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'rustic-cherry' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'rustic-cherry'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Rustic Cherry embraces natural character marks including knots, mineral streaks, and color variation from light to dark red-brown. This grade offers a warm, lived-in aesthetic while maintaining Cherry's fine grain and smooth texture. Perfect for traditional and farmhouse-style furniture and cabinetry.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Rustic Cherry sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Rustic Cherry sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Rustic Cherry sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- CHERRY -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'cherry' ? null : 'cherry'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Cherry</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'cherry' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'cherry'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Cherry is prized for its rich, warm reddish-brown color that deepens with age and exposure to light. With a fine, straight grain and smooth texture, it's considered one of the premium American hardwoods. Widely used in high-end furniture, cabinetry, and architectural millwork for its beauty and workability.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Cherry sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Cherry sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Cherry sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- HARD MAPLE -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'hard-maple' ? null : 'hard-maple'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Hard Maple</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'hard-maple' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'hard-maple'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Hard Maple is one of the hardest domestic woods, featuring a light, creamy white color with fine, uniform texture. Its exceptional durability makes it ideal for heavy-traffic flooring, butcher blocks, bowling alleys, and work surfaces. Also popular in furniture and cabinetry for its clean, bright appearance.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Hard Maple sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Hard Maple sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Hard Maple sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- HICKORY -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'hickory' ? null : 'hickory'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Hickory</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'hickory' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'hickory'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Hickory is the hardest commercial wood native to North America. It features dramatic color variation from nearly white sapwood to darker brown heartwood. Known for exceptional strength and shock resistance, it's used in tool handles, flooring, and furniture where extreme durability is required.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Hickory sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Hickory sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Hickory sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RUSTIC HICKORY -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'rustic-hickory' ? null : 'rustic-hickory'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Rustic Hickory</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'rustic-hickory' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'rustic-hickory'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Rustic Hickory embraces all the natural character of this incredibly hard wood, including knots, mineral streaks, and dramatic color variations. Perfect for rustic, cabin, or lodge aesthetics where bold grain patterns and natural imperfections add character. Maintains Hickory's legendary strength and durability.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Rustic Hickory sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Rustic Hickory sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Rustic Hickory sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- SELECT POPLAR -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'select-poplar' ? null : 'select-poplar'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Select Poplar</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'select-poplar' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'select-poplar'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Select Poplar is a versatile hardwood with distinctive greenish-yellow to purple heartwood streaks. Relatively soft for a hardwood, it's easy to work with and takes paint exceptionally well. Commonly used for painted cabinetry, furniture components, and architectural millwork where color uniformity isn't critical.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Select Poplar sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Select Poplar sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Select Poplar sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RED OAK #1 COMMON -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'red-oak-1-common' ? null : 'red-oak-1-common'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Red Oak #1 Common</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'red-oak-1-common' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'red-oak-1-common'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Red Oak #1 Common is a character grade that includes more natural features like knots and color variation than select grades. It offers an authentic, rustic appearance while maintaining Red Oak's strength and durability. Cost-effective choice for projects where natural wood character is valued.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Red Oak #1 Common sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Red Oak #1 Common sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Red Oak #1 Common sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RED OAK -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'red-oak' ? null : 'red-oak'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Red Oak</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'red-oak' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'red-oak'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Red Oak is one of America's most popular hardwoods, featuring a warm pinkish-brown color and prominent open grain pattern. It's strong, relatively affordable, and widely available. Excellent for flooring, furniture, cabinetry, and millwork. Takes stains well and can achieve various color finishes.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Red Oak sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Red Oak sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Red Oak sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- SAPELE FAS -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'sapele-fas' ? null : 'sapele-fas'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Sapele FAS</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'sapele-fas' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'sapele-fas'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Sapele FAS (Firsts and Seconds) is a premium African hardwood with a rich golden to dark reddish-brown color. Features an interlocked grain that produces a distinctive ribbon stripe figure. Often used as a mahogany substitute in fine furniture, cabinetry, and architectural millwork.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Sapele FAS sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Sapele FAS sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Sapele FAS sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- SAPELE QUARTER SAWN -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'sapele-qs' ? null : 'sapele-qs'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Sapele Quarter Sawn</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'sapele-qs' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'sapele-qs'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Quarter Sawn Sapele showcases dramatic ribbon-stripe figure created by the interlocked grain. The quartersawn cut enhances stability and produces stunning visual effects. Highly sought after for high-end furniture, musical instruments, and decorative panels where dramatic figure is desired.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Sapele Quarter Sawn sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Sapele Quarter Sawn sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Sapele Quarter Sawn sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- SOFT MAPLE -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'soft-maple' ? null : 'soft-maple'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Soft Maple</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'soft-maple' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'soft-maple'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Soft Maple features a light cream to reddish-brown color with fine, even texture. While softer than Hard Maple, it's still quite durable and more affordable. Popular for furniture, cabinetry, and millwork. Takes stains and finishes well, often used where Maple aesthetics are desired at lower cost.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Soft Maple sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Soft Maple sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Soft Maple sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- SELECT WALNUT -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'select-walnut' ? null : 'select-walnut'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Select Walnut</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'select-walnut' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'select-walnut'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Select Walnut is a premium grade with rich chocolate brown color and minimal sapwood. Features straight grain with occasional waves or curls. One of the most valuable American hardwoods, prized for fine furniture, cabinetry, gunstocks, and high-end millwork. Exceptional beauty and workability.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Select Walnut sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Select Walnut sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Select Walnut sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RUSTIC WALNUT -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'rustic-walnut' ? null : 'rustic-walnut'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Rustic Walnut</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'rustic-walnut' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'rustic-walnut'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Rustic Walnut embraces natural character including knots, sapwood streaks, and mineral deposits. Offers dramatic contrast between dark heartwood and light sapwood. Perfect for projects seeking organic, lived-in character while maintaining Walnut's premium status and beautiful dark tones.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Rustic Walnut sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Rustic Walnut sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Rustic Walnut sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- WALNUT VENEER GRADE -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'walnut-veneer' ? null : 'walnut-veneer'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Walnut Veneer Grade</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'walnut-veneer' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'walnut-veneer'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Walnut Veneer Grade represents the highest quality logs selected specifically for veneer production. Features exceptional color consistency, figure, and grain patterns. Used for slicing decorative veneers for high-end architectural panels, furniture, and cabinetry where appearance is paramount.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Walnut Veneer Grade sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Walnut Veneer Grade sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Walnut Veneer Grade sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- WHITE OAK #1 COMMON -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'white-oak-1-common' ? null : 'white-oak-1-common'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">White Oak #1 Common</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'white-oak-1-common' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'white-oak-1-common'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  White Oak #1 Common is a character grade featuring more natural variations including knots and color differences. Offers the strength and water resistance of White Oak at a more economical price point. Ideal for rustic or reclaimed-look projects while maintaining structural integrity.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="White Oak #1 Common sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="White Oak #1 Common sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="White Oak #1 Common sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- WHITE OAK -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'white-oak' ? null : 'white-oak'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">White Oak</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'white-oak' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'white-oak'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  White Oak is a premium hardwood with light to medium brown color and tight grain structure. Naturally water-resistant due to closed cell structure, making it ideal for outdoor furniture and boat building. Extremely durable and popular for flooring, furniture, and barrels for aging spirits.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="White Oak sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="White Oak sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="White Oak sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- WHITE OAK QUARTER SAWN -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'white-oak-qs' ? null : 'white-oak-qs'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">White Oak Quarter Sawn</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'white-oak-qs' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'white-oak-qs'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Quarter Sawn White Oak showcases dramatic ray fleck figure, creating a distinctive medullary ray pattern. This cut method enhances stability and produces stunning visual effects. Highly prized for Arts & Crafts and Mission-style furniture, as well as fine cabinetry and architectural millwork.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="White Oak Quarter Sawn sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="White Oak Quarter Sawn sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="White Oak Quarter Sawn sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RUSTIC WHITE OAK -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'rustic-white-oak' ? null : 'rustic-white-oak'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Rustic White Oak</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'rustic-white-oak' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'rustic-white-oak'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Rustic White Oak celebrates natural character including knots, mineral streaks, and color variation. Maintains White Oak's superior strength and water resistance while offering authentic, reclaimed-wood aesthetics. Perfect for farmhouse, industrial, or rustic designs where character marks add value.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Rustic White Oak sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Rustic White Oak sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Rustic White Oak sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- RIFT SAWN WHITE OAK -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'rift-sawn-white-oak' ? null : 'rift-sawn-white-oak'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Rift Sawn White Oak</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'rift-sawn-white-oak' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'rift-sawn-white-oak'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Rift Sawn White Oak features straight, uniform grain with minimal ray fleck figure. This specialized cut produces the most stable boards with consistent appearance. Premium choice for contemporary designs, modern cabinetry, and architectural millwork where clean, straight lines are essential.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Rift Sawn White Oak sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Rift Sawn White Oak sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Rift Sawn White Oak sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

            <!-- EASTERN WHITE PINE -->
            <div class="border border-gray-200 rounded-lg overflow-hidden">
              <button 
                @click="openSpecies = openSpecies === 'eastern-white-pine' ? null : 'eastern-white-pine'"
                class="w-full px-6 py-4 text-left bg-wellco-light-beige/10 hover:bg-wellco-light-beige/30 transition-colors flex justify-between items-center">
                <span class="font-semibold text-wellco-black">Eastern White Pine</span>
                <svg 
                  class="w-5 h-5 text-wellco-brown-alt transition-transform duration-300"
                  :class="openSpecies === 'eastern-white-pine' ? 'rotate-180' : ''"
                  fill="none" 
                  stroke="currentColor" 
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
              <div 
                x-show="openSpecies === 'eastern-white-pine'"
                x-collapse
                class="px-6 py-4 bg-white">
                <p class="text-gray-700 mb-4">
                  Eastern White Pine is a softwood with a light cream to pale yellow color and straight, even grain. It's lightweight, easy to work with, and takes paint and stain well. Popular for interior trim, paneling, furniture, and pattern-making. Valued for its uniform texture and resistance to warping.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+1" 
                         alt="Eastern White Pine sample 1" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+2" 
                         alt="Eastern White Pine sample 2" 
                         class="w-full h-full object-cover">
                  </div>
                  <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="https://placehold.co/400x400/e5e7eb/9ca3af?text=Image+3" 
                         alt="Eastern White Pine sample 3" 
                         class="w-full h-full object-cover">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Millwork Profiles Section -->
    <div class="mb-16" x-data="{ activeTab: 'baseboards' }">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Millwork Profiles</h2>
      <p class="text-base text-gray-600 mb-8">
        We craft custom profiles for both interior and exterior applications to meet your architectural needs.
      </p>

      <!-- Tabs -->
      <div class="flex flex-wrap gap-2 mb-8">
        <button 
          @click="activeTab = 'baseboards'" 
          :class="activeTab === 'baseboards' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Baseboards
        </button>
        <button 
          @click="activeTab = 'casings'" 
          :class="activeTab === 'casings' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Casings
        </button>
        <button 
          @click="activeTab = 'doorjambs'" 
          :class="activeTab === 'doorjambs' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Door Jambs
        </button>
        <button 
          @click="activeTab = 'windowsills'" 
          :class="activeTab === 'windowsills' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Window Sills
        </button>
        <button 
          @click="activeTab = 'siding'" 
          :class="activeTab === 'siding' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Interior & Exterior Siding
        </button>
        <button 
          @click="activeTab = 'tabletop'" 
          :class="activeTab === 'tabletop' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Tabletop Glue-Up
        </button>
      </div>

      <!-- Masonry Layout - Baseboards -->
      <div x-show="activeTab === 'baseboards'" class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($serviceImages['baseboards'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/baseboards/' . $image) }}" alt="Baseboard {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - Casings -->
      <div x-show="activeTab === 'casings'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($serviceImages['casings'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/casings/' . $image) }}" alt="Casing {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - Door Jambs -->
      <div x-show="activeTab === 'doorjambs'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($serviceImages['doorjambs'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/doorjambs/' . $image) }}" alt="Door Jamb {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - Window Sills -->
      <div x-show="activeTab === 'windowsills'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($serviceImages['windowsills'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/windowsills/' . $image) }}" alt="Window Sill {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - Interior & Exterior Siding -->
      <div x-show="activeTab === 'siding'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($serviceImages['interiorexteriorsiding'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/interiorexteriorsiding/' . $image) }}" alt="Siding {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - Tabletop Glue-Up -->
      <div x-show="activeTab === 'tabletop'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($serviceImages['tabletopglueup'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/tabletopglueup/' . $image) }}" alt="Tabletop Glue-Up {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Specialty Services Section -->
    <div class="mb-16" x-data="{ activeSpecialtyTab: 'lockmiterjoints' }">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Specialty Services</h2>
      <p class="text-base text-gray-600 mb-8">
        We also offer specialized woodworking and <span class="font-semibold">logistical services</span> to support your builds.
      </p>

      <!-- Specialty Tabs -->
      <div class="flex flex-wrap gap-2 mb-8">
        <button 
          @click="activeSpecialtyTab = 'lockmiterjoints'" 
          :class="activeSpecialtyTab === 'lockmiterjoints' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Lock-Miter Joints
        </button>
        <button 
          @click="activeSpecialtyTab = 'fauxbeamassembly'" 
          :class="activeSpecialtyTab === 'fauxbeamassembly' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          Faux Beam Assembly
        </button>
        <button 
          @click="activeSpecialtyTab = 's3s'" 
          :class="activeSpecialtyTab === 's3s' ? 'bg-wellco-beige border-wellco-brown-alt text-wellco-black' : 'bg-wellco-light-beige/20 border-gray-300 text-wellco-dark-gray'"
          class="px-4 py-2 rounded-md border font-medium hover:bg-wellco-beige transition-colors">
          S3S (Surfaced 3 Sides)
        </button>
      </div>

      <!-- Masonry Layout - Lock-Miter Joints -->
      <div x-show="activeSpecialtyTab === 'lockmiterjoints'" class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($specialtyImages['lockmiterjoints'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/lockmiterjoints/' . $image) }}" alt="Lock-Miter Joints {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - Faux Beam Assembly -->
      <div x-show="activeSpecialtyTab === 'fauxbeamassembly'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($specialtyImages['fauxbeamassembly'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/fauxbeamassembly/' . $image) }}" alt="Faux Beam Assembly {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>

      <!-- Masonry Layout - S3S -->
      <div x-show="activeSpecialtyTab === 's3s'" x-cloak class="columns-2 lg:columns-3 gap-4 lg:gap-6">
        @foreach($specialtyImages['s3s'] as $image)
        <div class="break-inside-avoid mb-4 lg:mb-6">
          <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 cursor-pointer gallery-item">
            <img src="{{ asset('images/services/s3s/' . $image) }}" alt="S3S (Surfaced 3 Sides) {{ basename($image, '.jpg') }}" class="w-full h-auto hover:scale-105 transition-transform duration-500">
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </div>
</div>
@endsection
