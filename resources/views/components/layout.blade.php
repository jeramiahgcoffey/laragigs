<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            laravel: "#ef3b2d",
          },
        },
      },
    };
  </script>
  <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
  <nav class="mb-4 flex items-center justify-between">
    <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a>
    <ul class="mr-6 flex space-x-6 text-lg">
      @auth
        <li>
          <span class="uppsercase font-bold">Welcome {{ auth()->user()->name }}</span>
        </li>
        <li>
          <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
            Manage Listings</a>
        </li>
        <li>
          <form method="POST" action="/logout" class="inline">
            @csrf
            <button type="submit">
              <i class="fa-solid fa-door-closed"></i> Logout
            </button>
          </form>
        </li>
      @else
        <li>
          <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>
        <li>
          <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
            Login</a>
        </li>
      @endauth
    </ul>
  </nav>

  <main>
    {{ $slot }}
  </main>
  <footer
    class="bg-laravel fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start font-bold text-white opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-black py-2 px-5 text-white">Post Job</a>
  </footer>
  <x-flash-message />
</body>

</html>
