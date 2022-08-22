@extends('layout')

@section('content')
  @include('partials._search')
  <a href="/" class="ml-4 mb-4 inline-block text-black"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="mr-6 mb-6 w-48" src="{{ asset('images/no-image.png') }}" alt="" />

        <h3 class="mb-2 text-2xl">{{ $listing->title }}</h3>
        <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <div class="my-4 text-lg">
          <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
        </div>
        <div class="mb-6 w-full border border-gray-200"></div>
        <div>
          <h3 class="mb-4 text-3xl font-bold">
            Job Description
          </h3>
          <div class="space-y-6 text-lg">
            {{ $listing->description }}

            <a href="mailto:{{ $listing->email }}"
              class="bg-laravel mt-6 block rounded-xl py-2 text-white hover:opacity-80"><i
                class="fa-solid fa-envelope"></i>
              Contact Employer</a>

            <a href="{{ $listing->website }}" target="_blank"
              class="block rounded-xl bg-black py-2 text-white hover:opacity-80"><i class="fa-solid fa-globe"></i> Visit
              Website</a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
@endsection
