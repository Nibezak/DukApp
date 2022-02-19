<x-admins.layouts.layouts>
          <h4 class="mb-4 text-lg font-semibold font-mono px-12 text-blue-600 dark:text-gray-300">
              CREATE AUTHOR
            </h4>
<div class="flex justify-center">
  <div class=" px-2 w-full md:w-3/5  mt-10">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="/author/create" enctype="multipart/form-data">
          @csrf
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
{{-- avatar --}}

              <div>
                @error('avatar')
                <span class="text-red-500">{{$message}}</span>
                @enderror
              </div>
{{-- name --}}
  <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Username</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="username" placeholder="Jane Doe" value="{{old('username')}}">
              </label>
  @error('username')
                <span class="text-red-500">{{$message}}</span>
                @enderror
<label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="name" placeholder="Jane Doe" value="{{old('name')}}">
              </label>
                @error('name')
                <span class="text-red-500">{{$message}}</span>
                @enderror
              {{-- email --}}

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-blue-600 dark:focus-within:text-blue-400">
                  <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input" name="email" placeholder="JohnDoe@example.com" value="{{old('email')}}">
                  <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                  </div>
                </div>
              </label>

                @error('email')
                <span class="text-red-500">{{$message}}</span>
                @enderror


              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">password</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="*********" type="password"  name="password">
              </label>
                @error('password')
                <span class="text-red-500">{{$message}}</span>
                @enderror
              {{-- confirm password --}}
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Confirm password</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="*********" type="password" name="password_confirmation">
              </label>

{{-- description --}}

              <div>
            <label class="block mt-4 text-sm">
                 <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
               About:
                </span>
                <textarea class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray
                 " rows="3" placeholder="Lorem ipsum dolor sit amet," name="about">{{old('about')}}</textarea>
                 @error('about')
                 <span class="text-red-500 font-mono">{{$message}}</span>
                 @enderror
              </label>
                <p class="mt-2 text-sm text-gray-500">
                  Brief description for the account.
                </p>
              </div>

                 <div class="mt-4 text-sm">
                  <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
               ACCOUNT TYPE
                </span>
                <div class="mt-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400" >
                    <input
                      type="checkbox"
                      class="text-blue-600 form-radio focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
                      name="accountType"
                      value={{1}}

                    />
                    <span class="ml-2">Admin</span>
                  </label>
            {{--       <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input
                      type="radio"
                      class="text-blue-600 form-radio focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
                      name="accountType"
                      value="busines"
                    />
                    <span class="ml-2">Admin</span>
                  </label> --}}
                </div>
              </div>
            </div>


            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-admins.layouts.layouts>


