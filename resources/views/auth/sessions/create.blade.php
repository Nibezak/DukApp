    <x-layout>
    <!-- component -->
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">

    <!-- linkedin logo -->
    <div class=" flex w-96 px-10  ">
    <a href="/posts" class=" text-blue-500 text-2xl font-mono font-semibold" style="letter-spacing: -6px;">
        <span class="text-gray-800">D</span>
        <span class="text-gray-800">u</span>
        <span class="text-gray-800">k</span>
        <span class="text-gray-800">A</span>
        <spa class="text-gray-800">p</span>
        <span class="text-gray-800">p</span>
    </a>

    </div>

    <!-- Layout  -->
    <div class="bg-white w-96 shadow-xl rounded p-5">
    <h1 class="text-3xl font-medium">Log In</h1>
    <p class="text-sm text-blue-500 tracking-widest ">Only Users acknowledged by the admin can log in and publish posts</p>
    <form class="space-y-5 mt-5" method="POST" action="/login">
        @csrf
    <input type="email" class="w-full h-12 border border-gray-800 rounded px-3
    @error('email') border-b-2 border-red-500  @enderror "
    value="{{old('email')}}"
    name="email"
    placeholder="E-amai address"
    required="required" />
    @error('email')
    <span class="text-red-500 text-sm font-mono">{{$message}}</span>
    @enderror
    <div class=" flex items-center  border border-gray-800 rounded px-3">
    <input class=" w-full h-12 border border-transparent focus:outline-none focus:ring-2
    focus:ring-purple-600 focus:border-transparent
    @error('password') border-b-2 border-red-500  @enderror"
    name="password"
    type="password"
    placeholder="password"
    required="required" />
{{--     <span class="text-blue-500 rounded-full px-3 ">show</span> --}}
    @error('password')
    <span class="text-red-500 text-sm font-mono">{{$message}}</span>
    @enderror
    </div>

   {{--  <div class="">
    <a href="#!" class="font-medium text-blue-500  rounded-full p-2">Forgot password?</a>
    </div> --}}

    <button class="text-center w-full bg-blue-500 rounded-full text-white py-3 font-medium" type="submit">Log in</button>

    </form>
    </div>

    <!-- Footer -->
    {{-- <p class="text-gray-600 text-md font-mono">New on Codeblog?
    <a href="{{route('register')}}" class="text-blue-500 font-medium text-sm">
    create an account</a>
    </p> --}}
    </div>


    {{-- <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
    <a title="Buy me a beer" href="https://www.buymeacoffee.com/emichel" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
    <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>
    </a>
    </div>
    </div> --}}
    </x-layout>
