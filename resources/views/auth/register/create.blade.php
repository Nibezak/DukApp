

  <x-layout>
  <!-- component -->
  <div class=" bg-white flex flex-col space-y-10 justify-center items-center">

  <!-- linkedin logo -->


  <!-- Layout  -->
  <div class="bg-white w-1/3 shadow-xl rounded px-5 py-2">
  <div class="  w-96 mt-6">
  <span class="text-blue-500 text-2xl font-mono font-semibold">CodeInit.Inc</span>

  </div>
  <h1 class="text-3xl font-medium">Create Account</h1>
  <p class="text-sm text-blue-500">Keep You updated on All programming news</p>
  <form class="space-y-5 mt-5"  method="POST" action="/register">
  @csrf
  <label for="username" class=" text-xs font-semibold font-mono text-gray-600 uppercase ml-2">Username</label>
  <input type="username" id="username" class="w-full h-10  rounded px-3
  @error('username') border-b-2 border-red-500  @enderror"
  placeholder="Username" name="username" autocomplete="username"
  value="{{old('username')}}"
  required/>
  @error('username')
  <span class="text-red-500 text-sm font-mono">{{$message}}</span>
  @enderror

  <label for="name" class=" block text-xs font-semibold font-mono text-gray-600 uppercase ml-2">name</label>
  <input type="name" id="name" class="w-full h-10  rounded px-3
  @error('name') border-b-2 border-red-500  @enderror"
  placeholder="name" name="name" autocomplete="username"
  value="{{old('name')}}"
  required/>
  @error('name')
  <span class="text-red-500 text-sm font-mono">{{$message}}</span>
  @enderror

  <label for="email" class="block  text-xs font-semibold font-mono text-gray-600 uppercase ml-2">email</label>

  <input type="email" id="email" class="w-full h-10  rounded px-3
  @error('email') border-b-2 border-red-500  @enderror"
  placeholder="email" name="email" autocomplete="email"
  value="{{old('email')}}"
  required/>
  @error('email')
  <span class="text-red-500 text-sm font-mono">{{$message}}</span>
  @enderror

  <label for="password" class=" block text-xs font-semibold font-mono text-gray-600 uppercase ml-2">password</label>

  <div class=" items-center   rounded px-3">
  <input type="password" id="password" class="w-full h-10  rounded px-3
  @error('password') border-b-2 border-red-500  @enderror"
  placeholder="password" name="password" autocomplete="password"
  required/>
  @error('password')
  <span class="text-red-500 text-sm font-mono">{{$message}}</span>
  @enderror

  </div>
  <label for="password" class=" block text-xs font-semibold font-mono text-gray-600 uppercase ml-2">Comfirm Password</label>

  <div class=" flex items-center   rounded px-3">
  <input class=" w-full h-10 border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
  id="password"
  type="password"
  name="password_confirmation"
  placeholder="Comfirm password">
  <span class="text-blue-500 rounded-full px-3 ">show</span>
  </div>

  <div class="inline-flex justify-between px-2">
  <a href="#" class="font-medium text-blue-500  text-sm rounded-full px-6">Forgot password?</a>
  <p class="text-gray-600 text-md px-6 "> has an account?
  <a href="{{route('login')}}" class="text-blue-500 font-medium text-sm">
  Log in</a>
  </p>
  </div>

  <button  type= "submit" class="text-center w-full bg-blue-500 rounded-full text-white py-3 font-medium">Create account</button>

  </form>

  </div>

  <!-- Footer -->

  </div>


  {{-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES
  <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
  <div>
  <a title="Buy me a beer" href="https://www.buymeacoffee.com/emichel" target="_blank" class=" w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-10">
  <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e10/60fde1011b6be57094e0abc69d9c2622a.jpg"/>
  </a>
  </div>
  </div> --}}
  </x-layout>
