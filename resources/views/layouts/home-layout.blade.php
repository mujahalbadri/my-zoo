<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @include('includes.home.styles')
  <title>{{ config('app.name', 'MyZoo') }}</title>
</head>

<body>
  <!-- Header Start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="#home" class="font-bold text-lg text-primary block py-6">My Zoo</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>

          <nav id="nav-menu"
            class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#home" class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
              </li>
              <li class="group">
                <a href="#about"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">About</a>
              </li>
              <li class="group">
                <a href="#animals"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Animals</a>
              </li>
              <li class="group">
                <a href="#ticket"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Ticket</a>
              </li>
              <li class="group">
                <a href="#contact"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
              </li>
              @auth
              <li class="group">
                <a href="{{ url('/dashboard') }}"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Dashboard</a>
              </li>
              @endauth
              @guest
              <li class="group">
                <a href="{{ url('/login') }}"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Login</a>
              </li>
              <li class="group">
                <a href="{{ url('/register') }}"
                  class="font-semibold text-md text-dark py-2 mx-8 flex group-hover:text-primary">Register</a>
              </li>
              @endguest
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  {{ $slot }}

  <!-- Footer Start -->
  <footer class="bg-slate-700 pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
          <h2 class="font-bold text-4xl text-white mb-5">My Zoo</h2>
          <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
          <p>myzoo@gmail.com</p>
          <p>Jl. Taman Margasatwa No. 21</p>
          <p>Jakarta</p>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5 uppercase">
            Animals
          </h3>
          <ul class="text-slate-300">
            <li>
              <p class="inline-block text-base mb-3">Lion</p>
            </li>
            <li>
              <p class="inline-block text-base mb-3">Monkey</p>
            </li>
            <li>
              <p class="inline-block text-base mb-3">Elephant</p>
            </li>
            <li>
              <p class="inline-block text-base mb-3">Zebra</p>
            </li>
          </ul>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5 uppercase">
            Menu
          </h3>
          <ul class="text-slate-300">
            <li>
              <a href="#home" class="inline-block text-base mb-3 hover:text-primary">Home</a>
            </li>
            <li>
              <a href="#about" class="inline-block text-base mb-3 hover:text-primary">About</a>
            </li>
            <li>
              <a href="#animals" class="inline-block text-base mb-3">Animals</a>
            </li>
            <li>
              <a href="#ticket" class="inline-block text-base mb-3 hover:text-primary">Ticket</a>
            </li>
            <li>
              <a href="#contact" class="inline-block text-base mb-3 hover:text-primary">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-full pt-6 border-t border-slate-500">
        <div class="flex items-center justify-center "></div>
        <p class="text-slate-400 text-center text-sm md:text-md">
          Created by
          <span><a href="#home" class="font-semibold text-slate-400 hover:text-primary">My Zoo</a></span>, with <a
            href="https://tailwindcss.com/" class="font-semibold text-slate-400 hover:text-primary"
            target="_blank">Tailwind CSS 3</a></span>.
        </p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  @include('includes.home.script')
</body>

</html>