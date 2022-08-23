<section class="bg-laravel align-center relative mb-4 flex h-72 flex-col justify-center space-y-4 text-center">
  <div class="absolute top-0 left-0 h-full w-full bg-center bg-no-repeat opacity-10"
    style="background-image: url('images/laravel-logo.png')"></div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
      Lara<span class="text-black">Gigs</span>
    </h1>
    <p class="my-4 text-2xl font-bold text-gray-200">
      Find or post Laravel jobs & projects
    </p>
    @auth
    @else
    <div>
      <a href="/register"
      class="mt-2 inline-block rounded-xl border-2 border-white py-2 px-4 uppercase text-white hover:border-black hover:text-black">Sign
      Up to List a Gig</a>
    </div>
    @endauth
  </div>
</section>
