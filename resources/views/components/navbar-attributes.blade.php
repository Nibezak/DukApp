<div x-data="{ open: false }" class="bg-gray-800 p-2 mt-0 fixed w-full z-10 top-0 flex flex-col  px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8   ">
    <div class="p-4 flex flex-row items-center justify-between ">
<a href="/">
<div class="flex">
                    <img src="/svg/dukapp-svg.svg" class=" shadow-lg">
                    <p class="inline-block py-2 px-4 text-gray-100 font-semibold text-xl no-underline " href="#">DukApp</p>
</div>
                </a>

      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>

    </div>

    <nav :class="{'flex': open, 'hidden': !open}" class="inline-flex flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">


                    <a class="inline-block py-2 px-4 text-gray-100 font-semibold text-sm no-underline border-b-1 border-gray-300" href="/posts">ARTICLES</a>

                    <a class="inline-block py-2 px-4 text-gray-100 font-semibold  text-sm  no-underline border-b-1 border-gray-300" href="/features">FEATURES</a>

                    <a class="inline-block py-2 px-4 text-gray-100 font-semibold  text-sm no-underline border-b-1 border-gray-300" href="/download">DOWNLOAD</a>

                    <!-- <a class="inline-block py-2 px-4 text-gray-100 font-semibold text-sm  no-underline border-b-1 border-gray-300" href="#">SECURITY</a> -->

                    <a class="inline-block py-2 px-4 text-gray-100 font-semibold  text-sm  no-underline border-b-1 border-gray-300" href="helpCenter">HELP CENTER</a>


    </nav>

        <div class=" px-4 flex flex-col mx-auto md:flex-row md:items-center md:justify-around">
    <div class="flex items-center justify-around">

    @auth
    <div class="md:hidden lg:hidden">
<x-account-button />
    </div>
@else
<div class="md:hidden lg:hidden">
<x-login-button/>
</div>
    @endauth
    </div>
    <x-navbar-links />

    </div>
  </div>
