<x-layout>
  <x-card class="mx-auto mt-24 max-w-lg p-10">
    <header class="text-center">
      <h2 class="mb-1 text-2xl font-bold uppercase">
        Login
      </h2>
      <p class="mb-4">Log into your account to post gigs</p>
    </header>

    <form action="/users/authenticate" method="POST">
      @csrf
      <div class="mb-6">
        <label for="email" class="mb-2 inline-block text-lg">Email</label>
        <input type="email" class="w-full rounded border border-gray-200 p-2" name="email"
          value="{{ old('email') }}" />
        @error('email')
          <p class="mt-1 text-xs text-red-500">
            {{ $message }}
          </p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="mb-2 inline-block text-lg">
          Password
        </label>
        <input type="password" class="w-full rounded border border-gray-200 p-2" name="password" />
        @error('password')
          <p class="mt-1 text-xs text-red-500">
            {{ $message }}
          </p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-laravel rounded py-2 px-4 text-white hover:bg-black">
          Sign In
        </button>
      </div>

      <div class="mt-8">
        <p>
          Don't have an account?
          <a href="/register" class="text-laravel">Register</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>
