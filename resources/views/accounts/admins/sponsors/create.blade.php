<x-admins.layouts.layouts>
  <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div>
  <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 px-3">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Create an Ad</h3>
        <p class="mt-1 text-sm text-gray-600 font-light">
          This information will be displayed publicly so be careful what you share.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form method="POST" action="/accounts/ads/create">
        @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label  class="block text-sm font-medium text-gray-700">
                 Sponsor's name
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="name" name="sponsor_name" class="focus:outline-none flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="JohnDoe">
                </div>
                @error('sponsor_name')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              </div>
            </div>

    <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label  class="block text-sm font-medium text-gray-700">
                 ad's Title
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="text" name="title" class="focus:outline-none flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Sponsoring">
                </div>
                   @error('title')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              </div>
            </div>
            <div>
              <label for="about" class="block text-sm font-medium text-gray-700">
               The add content
              </label>
              <div class="mt-1">
                <textarea id="about" name="content" class="shadow-sm h-full focus:outline-none mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="embed"></textarea>
              </div>
                 @error('content')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              <p class="mt-2 text-sm text-gray-500">
               You can embed the ad here
              </p>
            </div>

        <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium text-gray-700">
              Price Paid
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="number" name="price" class="focus:outline-none flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Rwandan Francs">
                </div>
                   @error('price')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              </div>
            </div>

          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


</x-admins.layouts.layouts>
