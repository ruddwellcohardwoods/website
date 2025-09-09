@extends('layouts.master')

@section('title', 'About - Wellco Hardwoods')

@section('content')
<div class="sm:py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:flex sm:flex-col sm:space-y-16">

    <!-- Section 1: Heading -->
    <div class="text-center">
      <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl sm:py-14">
        "Our story" – Get to know about our heritage and background
      </h1>
    </div>

    <!-- Section 2: Behind the Hardwood -->
    <div class="mt-12 grid grid-cols-1 md:flex md:grid-cols-2 gap-8">
      <!-- Text Content -->
      <div class="space-y-4 flex flex-col lg:justify-between md:flex-1">
        <h2 class="text-2xl font-bold text-gray-900">Behind the hardwood</h2>
        <div class="flex flex-col space-y-7 text-base text-gray-600">
          <p>Long before Wellco Hardwoods was started, there was a small cabinet maker operating out of Black Forest by
            the name of Robert Wells. As a play on his last name, he decided to name his cabinet business Wellco
            Manufacturing, with Wellco being a conjunction of Wells Company.</p>
        </div>
        <div class="hidden lg:block">
          <p>
            After one of his sheet goods suppliers in Colorado Springs went out of business in the early 1970’s, he had
            to pivot and pull his materials from suppliers out of Denver. Recognizing an opportunity, with some benefits
            in it for him and his business, Robert urged his sons to consider getting into the supply business.
            Fortunately, their mom used to babysit the kids of a family that had a mill back in New York who she reached
            out to and connected her sons with to get started. After tossing the idea around a bit, Lynn and Russ
            decided to go for it.
          </p>
        </div>
      </div>
      <!-- Image -->
      <div class="rounded shadow-md overflow-hidden max-w-lg md:flex-1">
        <img loading="lazy" src="{{ asset('images/about1.png') }}" alt="Behind the Hardwood"
          class="w-full h-full object-cover">
      </div>
    </div>

    <div class="mt-12 flex flex-col space-y-3">
      <p class="lg:hidden">
        After one of his sheet goods suppliers in Colorado Springs went out of business in the early 1970’s, he had
        to pivot and pull his materials from suppliers out of Denver. Recognizing an opportunity, with some benefits
        in it for him and his business, Robert urged his sons to consider getting into the supply business.
        Fortunately, their mom used to babysit the kids of a family that had a mill back in New York who she reached
        out to and connected her sons with to get started. After tossing the idea around a bit, Lynn and Russ
        decided to go for it.
      </p>
      <p>
        So they formed a business (Kettle Creek Transportation), bought a truck, and would run back and forth with
        a full load of lumber from the Northeast to Colorado Springs. In time, they decided to split off their
        supply warehouse from their trucking company to better control each business independently. Playing off the
        name of their dad’s business, they decided to call the lumber company Wellco Hardwoods.</p>
    </div>


    <!-- Section 3: Additional Content (Mobile and Hidden on Large Screens) -->
    <div class="mt-8 md:hidden space-y-7 text-base text-gray-600">
      <div class="rounded shadow-md overflow-hidden">
        <img loading="lazy" src="{{ asset('images/about2.png') }}" alt="Hardwood processing"
          class="w-full h-full object-cover">
      </div>
      <div class="flex">
        <h2 class="text-2xl font-bold text-gray-900">Our commitment to quality</h2>
      </div>
      <p>For years, they operated the business out of a shed behind their parents' property in Black Forest, often doing
        their work at night because their dad was using it for his cabinet business during the day. The planer they were
        running wasn’t exactly quiet, and neighbors began to take notice with the loud operation taking place from
        sunset to sunrise. The loud delivery trucks they used didn’t help with the noise, so the brothers tried to get
        the trucks on the road by 5:00 am to avoid the neighbors from catching them.</p>
      <p>Because their operation had outgrown the shed, they eventually decided to leave Black Forest in the late 1970’s
        and head into a shop near downtown Colorado Springs. After growing out of that shop and another, in 1986 they
        came across the site where Wellco Hardwoods stands today and have called it home ever since. With the new site
        having all the extra space it did, it allowed them to expand from providing sheet goods, basic milling, and
        planning to specializing in trim and moulding – what has become their bread and butter.</p>
      <div class="rounded shadow-md overflow-hidden max-w-2xl flex-1">
        <img loading="lazy" src="{{ asset('images/about3.png') }}" alt="Wood supplies"
          class="w-full h-full object-cover">
      </div>
      <p>Nearly 50 years later, Wellco Hardwoods continues to thrive and supply Colorado Springs and the state of
        Colorado with top-grade hardwoods and sheet goods from suppliers around the world.</p>
    </div>

    <!-- Section 4: Row of Images -->
    <div class="hidden mt-8 grid-cols-1 sm:flex gap-4 w-full justify-center max-h-64">
      <div class="rounded shadow-md overflow-hidden max-w-2xl flex-1">
        <img loading="lazy" src="{{ asset('images/about2.png') }}" alt="Hardwood processing"
          class="w-full h-full object-cover">
      </div>
      <div class="rounded shadow-md overflow-hidden max-w-2xl flex-1">
        <img loading="lazy" src="{{ asset('images/about3.png') }}" alt="Wood supplies"
          class="w-full h-full object-cover">
      </div>
    </div>

    <!-- Section 5: Our Commitment to Quality (Visible on Large Screens) -->
    <div class="hidden md:grid grid-cols-1 gap-y-9 mt-12">
      <div class="flex">
        <h2 class="text-2xl font-bold text-gray-900">Our commitment to quality</h2>
      </div>
      <div class="text-base text-gray-600">
        <p>For years, they operated the business out of a shed behind their parents' property in Black Forest, often
          doing their work at night because their dad was using it for his cabinet business during the day. The planer
          they were running wasn’t exactly quiet, and neighbors began to take notice with the loud operation taking
          place from sunset to sunrise. </p>
      </div>
      <div class="flex space-x-7">
        <div class="flex-1 flex flex-col space-y-3 justify-between ">
          <div class="flex text-base text-gray-600 items-start space-x-7">
            <div class="flex-1">
              <p> The loud delivery trucks they used didn’t help with the noise, so the brothers
                tried to get the trucks on the road by 5:00 am to avoid the neighbors from catching them.
              </p>
              <p>Because their operation had outgrown the shed, they eventually decided to leave Black Forest in the
                late
                1970’s and head into a shop near downtown Colorado Springs.</p>
            </div>
          </div>
          <div class="hidden text-base text-gray-600 lg:block">
            <p>After growing out of that shop and another, in
              1986 they came across the site where Wellco Hardwoods stands today and have called it home ever since.
              With
              the new site having all the extra space it did, it allowed them to expand from providing sheet goods,
              basic
              milling, and planning to specializing in trim and moulding – what has become their bread and butter.
            </p>
          </div>
          <div class="text-base text-gray-600">
            <p>
              Nearly 50 years later, Wellco Hardwoods continues to thrive and supply Colorado Springs and the state of
              Colorado with top-grade hardwoods and sheet goods from suppliers around the world.
            </p>
          </div>
        </div>
        <div class="hidden sm:block rounded shadow-md max-w-lg mx-auto w-[50%] lg:w-[28rem]">
          <img loading="lazy" src="{{ asset('images/about4.png') }}" alt="Wood supplies"
            class="w-full h-full object-cover ">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection