                <img class="w-full h-56 object-cover object-center" src="https://i.pravatar.cc/?u={{auth()->user()->username}}"  alt="avatar">
        <div class="flex items-center px-2 py-3 bg-gray-900 justify-between">

            <div class="mx-3 text-white font-semibold text-lg inline-flex text-green-400">
                  <svg class="h-6 w-6  fill-current" viewBox="0 0 512 512">
                <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
            </svg>
         <h1 class="px-2"> Editor </h1>
       </div>
            <div class="px-2">
              <button class=" mx-3 text-blue-500 font-semibold text-sm  border-2 border-blue-600 px-3 py-1 bg-transparent rounded-md hover:bg-blue-600 hover:text-white">Edit</button>
            </div>
        </div>

        <div class="py-4 px-6">
            <h1 class="text-2xl font-semibold text-gray-800">{{auth()->user()->name}}</h1>
            <p class="py-2 text-md font-semibold text-gray-500">{{auth()->user()->username}}</p>


            <div class="flex items-center mt-4 text-gray-500">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                    <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                </svg>
                <h1 class="px-2 text-sm font-semibold text-gray-500">{{auth()->user()->email}}</h1>
            </div>

            <a href="#" class="text-blue-500 text-sm font-md underline px-4 "> Ask the Admin a question?</a>
        </div>



