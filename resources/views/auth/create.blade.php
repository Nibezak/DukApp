<x-layout>
    <x-navbar/>
    <!-- component -->
    <!-- Root element for center items -->
    <main class="container">
    <div class="flex flex-col h-screen bg-gray-100">
    <!-- Auth Card Container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
    <!-- Auth Card -->
    <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12
    px-6 py-10 sm:px-10 sm:py-6
    bg-white rounded-lg shadow-md lg:shadow-lg">

    <!-- Card Title -->
    <h2 class="text-center font-normal text-3xl lg:text-4xl text-blue-600" style="font-family: cursive;">
    Create Account!
    </h2>

    <form class="mt-10" method="POST" action="register">
    @csrf
    <label for="username" class="block text-xs font-semibold text-gray-600 uppercase" style="font-family:cursive;">Username</label>
    <input id="username" type="username" name="username" placeholder="username" autocomplete="username"
    class="block w-full py-3 px-1 mt-2
    text-gray-800 appearance-none
    border-b-2 border-gray-100
    focus:text-blue-500 focus:outline-none focus:border-gray-200
    @error('username') border-b-2 border-red-500  @enderror"
    value="{{old('username')}}"
    required />
    @error('username')
    <span class="text-red-500 text-sm font-mono">{{$message}}</span>
    @enderror
    <!--name Input -->
    <label for="name" class="mt-2 block text-xs font-semibold text-gray-600 uppercase" style="font-family:cursive;">Name</label>
    <input id="name" type="name" name="name" placeholder="Name" autocomplete="name"
    class="block w-full py-3 px-1 mt-2
    text-gray-800 appearance-none
    border-b-2 border-gray-100
    focus:text-blue-500 focus:outline-none focus:border-gray-200
    @error('name') border-b-2 border-red-500  @enderror"
    value="{{old('name')}}"

    required />
     @error('name')
    <span class="text-red-500 text-sm font-mono">{{$message}}</span>
    @enderror
    {{-- email --}}
    <label for="email" class="mt-2 block text-xs font-semibold text-gray-600 uppercase" style="font-family:cursive;">E-mail</label>
    <input id="email" type="email" name="email" placeholder="e-mail address" autocomplete="email"
    class="block w-full py-3 px-1 mt-2
    text-gray-800 appearance-none
    border-b-2 border-gray-100
    focus:text-blue-500 focus:outline-none focus:border-gray-200
    @error('email') border-b-2 border-red-500  @enderror"
    value="{{old('email')}}"

    required />
    @error('email')
    <span class="text-red-500 text-sm font-mono">{{$message}}</span>
    @enderror
    <!-- Password Input -->
    <label for="password" class="mt-2 block mt-2 text-xs font-semibold text-gray-600 uppercase" style="font-family:cursive;">Password</label>
    <input id="password" type="password" name="password" placeholder="password"
    class="block w-full py-3 px-1 mt-2 mb-4
    text-gray-800 appearance-none
    border-b-2 border-gray-100
    focus:text-blue-500 focus:outline-none focus:border-gray-200
    @error('password') border-b-2 border-red-500  @enderror"
    required />
    @error('password')
    <span class="text-red-500 text-sm font-mono">{{$message}}</span>
    @enderror

    {{-- comfirm password  --}}
    <label for="password" class="mt-2 block mt-2 text-xs font-semibold text-gray-600 uppercase" style="font-family:cursive;">Comfirm password</label>
    <input id="password" type="password" name="password_confirmation" placeholder="Comfirm password"
    class="block w-full py-3 px-1 mt-2 mb-4
    text-gray-800 appearance-none
    border-b-2 border-gray-100
    focus:text-blue-500 focus:outline-none focus:border-gray-200"
    required />
    <!-- Auth Buttton -->
    <button type="submit"
    class="w-full py-3 mt-10 bg-blue-500 rounded-sm
    font-medium text-white uppercase
    focus:outline-none hover:bg-blue-600 hover:shadow-none">
    Create Account
    </button>

    <!-- Another Auth Routes -->
    <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
    <a href="forgot-password" class="flex-2 underline">
    Forgot password?
    </a>

    <p class="flex-1 text-blue-500 text-md mx-4 my-1 sm:my-auto">
    or
    </p>

    <button class="flex-2 underline" type="submit">
    Create an Account
    </button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </main>
</x-layout>
