<x-admins.layouts.layouts>

            <div  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
              <h4 class="mb-4 text-lg font-semibold font-mono px-12 text-blue-600 dark:text-gray-300">
              CREATE BLOG POST
            </h4>
            <form  method="POST" action="/tags/create">
              @csrf
            <label class="block mt-4 text-sm w-full">
                <span class="text-gray-700 font-semibold dark:text-gray-400 ">
                 Create Tag
                </span>
                <div class="relative text-gray-500 focus-within:text-purple-600 w-full md:w-1/4">
                  <input class="block w-full pr-20 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray form-input" placeholder="A Tag" type="text" name="name">
                  <button class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" type="submit">
                    Save
                  </button>
                </div>
                  @error('name')
                <span class="text-red-500 font-mono">{{$message}}</span>
                  @enderror
              </label>
            </form>
            <form method="POST" action="/admins/posts/create" enctype="multipart/form-data">
              @csrf
            <div class="flex justify-center mt-10">
              <x-inputs.image-uploader>
                <x-slot name="name">
                  photo
                </x-slot>
         <x-slot name="default_image">
        <img id="image" class="object-cover w-full h-32" src="/images/default-photo.png">
        </x-slot>
              </x-inputs.image-uploader>
              <div class="block">
              @error('photo')
            <span class="text-red-600">{{$message}}</span>
              @enderror
            </div>
            </div>
              <label class="block text-sm">
              <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Title:
                </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input  @error('title')focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input @enderror"
                  placeholder="New title" name="title" value="{{old('title')}}"
                />
              </label>
              <div class="flex justify-center">
                    @error('title')
            <span class="text-red-600">{{$message}}</span>
              @enderror
              </div>


              <label class="block mt-4 text-sm">
                 <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
               Verse:
                </span>
                <textarea
                 class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray
                 @error('verse')focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input @enderror"
                  rows="3"
                  placeholder="Lorem ipsum dolor sit amet," name="verse">{{old('verse')}}</textarea>
              </label>
                 <div class="flex justify-center">
                    @error('verse')
            <span class="text-red-600">{{$message}}</span>
              @enderror
              </div>

              <label class="block mt-4 text-sm">
                  <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Body:
                </span>
                <textarea
                id="editor"  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray
                @error('body')focus:border-red-400 focus:outline-none focus:shadow-outline-red form-inpu @enderror"
                  rows="3"
                  placeholder="Lorem ipsum dolor sit amet," name="body">{{old('body')}}</textarea>
              </label>
                 <div class="flex justify-center">
                    @error('body')
            <span class="text-red-600">{{$message}}</span>
              @enderror
              </div>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Tags:
                </span>
              <x-inputs.select />
              @error('tag_id')
              <span class="text-red-600">{{$message}}</span>
              @enderror
              </label>


                           <div class="mt-4 text-sm">
                  <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Post Type:
                </span>
         {{--        <div class="mt-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400" >
                    <input
                      type="radio"
                      class="text-blue-600 form-radio focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
                      name="accountType"
                      value="personal"
                    />
                    <span class="ml-2">Public</span>
                  </label>
                  <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input
                      type="radio"
                      class="text-blue-600 form-radio focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
                      name="accountType"
                      value="busines"
                    />
                    <span class="ml-2">Draft</span>
                  </label>
                </div> --}}
              </div>

              <button class="px-4 py-2 mt-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" type="submit">
              Publish Post
                </button>
          </form>
            </div>
</x-admins.layouts.layouts>



