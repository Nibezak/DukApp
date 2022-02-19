  <div class="flex justify-between md:hidden">
          <button type="button" class="flex justify-center w-1/2 py-1 mr-2 text-center  border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-200">
            <div class="flex items-center px-2">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Unstar</span>
            </div>
          </button>
          <button type="button" class="flex justify-center w-1/2 py-1 ml-2 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-300">
            <div class="flex items-center px-2">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
              <span class="self-center text-sm font-medium">reads</span>
              <svg class="w-3 h-3 ml-1 text-gray-700 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
        </div>
      </div>
      <div class="flex  items-center justify-center px-10 mt-6 -mx-10 border-b select-none md:mt-4">
        <div class="flex">
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 md:block md:flex">
            <a href="/account/{{auth()->user()->username}}/create/post">
              <button  class="cursor-pointer inline-flex focus:outline-none focus:ring ">

            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

            Create
          </button>
        </a>
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
            Settings
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
         Advertise
          </div>

        </div>

          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
<a href="/Dashboard">
        Dashboard
       </a>
          </div>
      </div>
