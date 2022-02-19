<x-admins.layouts.layouts>

            <div  class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" >
                   <h4 class="inline-flex mb-4 text-lg font-semibold bg-white text-blue-600 dark:text-gray-300">
              Edit: <p class=" mx-3 text-gray-400"> {{ $post->title}}</p>
            </h4>
            <form method="POST" action="/admins/posts/{{$post->id}}" enctype="multipart/form-data">
              @method('PATCH')
              @csrf
                <div class="flex justify-center mt-10">
              <x-inputs.image-uploader  value="{{old('photo')}}">
                <x-slot name="name">
                  photo
                </x-slot>
         <x-slot name="default_image">
        <img id="image" class="object-cover w-full h-32" src="{{$post->photo}}">
        </x-slot>
              </x-inputs.image-uploader>
              @error('photo')
            <span class="text-red-600">{{$message}}</span>
              @enderror
            </div>
              <label class="block text-sm">
              <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Title:
                </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input  @error('title')focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input @enderror"
                  placeholder="New title" name="title" value="{{$post->title}}"
                />
              </label>


              <label class="block mt-4 text-sm">
                 <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
               Verse:
                </span>
                <textarea
                 class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray
                 @error('verse')focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input @enderror"
                  rows="3"
                  placeholder="Lorem ipsum dolor sit amet," name="verse">{{$post->verse}}</textarea>
              </label>

              <label class="block mt-4 text-sm">
                  <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Body:
                </span>
                <textarea
                id="editor"  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray
                @error('body')focus:border-red-400 focus:outline-none focus:shadow-outline-red form-inpu @enderror"
                  rows="3"
                  placeholder="Lorem ipsum dolor sit amet," name="body">{{$post->body}}</textarea>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Tags:
                </span>
              <x-inputs.select />
              @error('tag_id')
              <span class="text-red-600">{{$message}}</span>
              @enderror
              </label>

{{--
                           <div class="mt-4 text-sm">
                  <span class="text-gray-700 font-semibold font-mono dark:text-gray-400">
                Post Type:
                </span>
                <div class="mt-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400" >
                    <input
                      type="radio"
                      class="text-blue-600 form-radio focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray"
                      name="PostType"
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
                </div>
              </div> --}}

              <button class="px-4 py-2 mt-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue" type="submit">
             Edit This Post
                </button>
            </div>
          </form>
</x-admins.layouts.layouts>



