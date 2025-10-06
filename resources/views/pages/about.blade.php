@extends('layouts.master')

@section('title', 'About - Wellco Hardwoods')

@section('content')
<div class="sm:py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:flex sm:flex-col sm:space-y-16">

    <!-- Section 1: Heading -->
    <div class="text-center">
      <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl sm:py-14">
        "Our story"- Get to know about our heritage and background
      </h1>
    </div>

    <!-- Section 2: Behind the Wood -->
    <div class="mt-16 py-8 grid grid-cols-1 lg:grid-cols-[300px_1fr] gap-8">
      <h2 class="text-3xl font-bold text-gray-900">Behind the Wood</h2>
      <div class="space-y-4 text-base text-gray-600 leading-relaxed">
        <p>Long before Wellco Hardwoods was started there was a small cabinet maker operating out of Black Forest by the name of Robert Wells. As a play on his last name he decided to name his cabinet business Wellco Manufacturing, with Wellco being a conjunction of Wells Company.</p>
        <p>After one of his sheet goods suppliers in Colorado Springs went out of business in the early 1970's he had to pivot and pull his materials from suppliers out of Denver. Recognizing an opportunity, with some benefits in it for him and his business, Robert urged his sons to consider getting into the supply business. Fortunately their mom used to babysit the kids of a family that had a mill back in New York who she reached out to and connected her sons with to get started. After tossing the idea around a bit, Lynn and Russ decided to go for it. So they formed a business (Kettle Creek Transportation), bought a truck, and would run back and forth with a full load of lumber from the Northeast to right here in Colorado Springs. In time they decided to split off their supply warehouse from their trucking company to better control each business independently. Playing off the name of their dad's business they decided to call the lumber company Wellco Hardwoods.</p>
      </div>
    </div>

    <!-- Section 2.5: Images and Commitment to Quality -->
    <div class="mt-16 py-8">
      <!-- Images -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full mb-16">
        <div class="rounded overflow-hidden">
          <img loading="lazy" src="{{ asset('images/about/1.png') }}" alt="Hardwood building exterior"
            class="w-full h-full object-cover">
        </div>
        <div class="rounded overflow-hidden">
          <img loading="lazy" src="{{ asset('images/about/2.png') }}" alt="Kitchen interior"
            class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Commitment to Quality -->
      <div class="grid grid-cols-1 lg:grid-cols-[300px_1fr] gap-8">
        <h2 class="text-3xl font-bold text-gray-900">Commitment to Quality</h2>
        <div class="space-y-4 text-base text-gray-600 leading-relaxed">
          <p>For years they operated the business out of a shed behind their parents property in Black Forest, often doing their work at night because their dad was using it for his cabinet business during the day. The planer they were running wasn't exactly quiet and neighbors began to take notice with the loud operation taking place from sunset to sunrise.</p>
          <p>The loud delivery trucks they used didn't help with the noise so the brothers tried to get the trucks on the road by 5:00 am to avoid the neighbors from catching them. Because their operation had outgrown the shed they eventually decided to leave Black Forest in the late 1970's and head into a shop near downtown Colorado Springs.</p>
          <p>After growing out of that shop, and another, in 1986 they came across the site where Wellco Hardwoods stands today and have called it home ever since. With the new site having all the extra space it did it allowed them to expand from providing sheets goods, basic milling, and planning to also adding and specializing in trim and moulding, what has become their bread and butter.</p>
          <p>Nearly 50 years later Wellco Hardwoods continues to thrive and supply Colorado Springs and the state of Colorado with top grade hardwoods and sheet goods from suppliers around the states and world.</p>
        </div>
      </div>
    </div>

    <!-- Section 4: Meet our Team -->
    <div class="mt-16 mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Meet our Team</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
        $teamImages = ['1.png', '2.png', '3.png', '4.png'];
        $teamMembers = [
          ['name' => 'Peter Peter', 'role' => 'CEO, wellco'],
          ['name' => 'Peter Peter', 'role' => 'CEO, wellco'],
          ['name' => 'Nate Daniel', 'role' => 'Marketing manager'],
          ['name' => 'Nate Daniel', 'role' => 'Marketing manager'],
          ['name' => 'Peter Peter', 'role' => 'CEO, wellco'],
          ['name' => 'Nate Daniel', 'role' => 'Marketing manager']
        ];
        shuffle($teamImages);
        @endphp
        
        @foreach($teamMembers as $index => $member)
        <div class="flex flex-col">
          <div class="rounded overflow-hidden mb-3">
            <img loading="lazy" src="{{ asset('images/team/' . $teamImages[$index % 4]) }}" 
              alt="{{ $member['name'] }}"
              class="w-full h-64 object-cover">
          </div>
          <h3 class="text-lg font-bold text-gray-900">{{ $member['name'] }}</h3>
          <p class="text-sm text-gray-600">{{ $member['role'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
