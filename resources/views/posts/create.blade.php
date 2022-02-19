<x-layout>
    <x-navbar/>
    <center>
  <div class=" bg-white  space-y-10 justify-center items-center">

    <h1 class="text-blue-500 font-semibold text-4xl">
        Create Blog Post
    </h1>
    <div class="border-t-4 w-1/3 border-gray-400 h-2"></div>

    <div>
<!-- component -->
<div class="bg-gray-100 rounded-md shadow-2xl w-4/5 py-3 mt- antialiased sans-serif  bg-white" style="min-height: 900px">


    <div class="container  py-6 px-4" >
        <form method="POST" action="/tags/create" class="md:inline-flex">
            @csrf
            <input type="text" name="name" class="block w-52  px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 focus:border-4 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" placeholder="Create tag">
            <p class="py-2  px-2 text-gray-400 font-normal hidden md:block tracking-thin">Create a tag in order to use it when you create a post!</p>
            <button class="bg-gray-700 text-white my-2 px-8 md:px-10 rounded-md md:mx-3" type="submit">Save</button>
            <p class="py-2  px-2 text-gray-400 font-normal md:hidden tracking-thin">Create a tag in order to use it when you create a post!</p>

        </form>

        <form method="POST" action="/posts/create" class="py-4 mb-3" enctype="multipart/form-data">
            @csrf
<div class="py-3">
    <x-inputs.image-uploader>
        <x-slot name="name">
                photo
        </x-slot>
    </x-inputs.image-uploader>
@error('photo')
<span class="text-red-500 text-sm"> {{$message}} </span>
@enderror
</div>

        <div class="justify-between px-3 mb-6">

<input type="text" name="title" id="title" placeholder="New Title" class="block w-3/5  px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 focus:border-4 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{old('title')}}" />
@error('title')
<span class="text-red-600 font-semibold text-sm">{{$message}}</span>
@enderror
        </div>

       <div class="block justify-between mb-10">

<input type="text" name="verse" id="verse" placeholder="New Verse" class="block w-3/5  px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 focus:border-4 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" value="{{old('verse')}}" />
@error('verse')
<span class="text-red-600 font-semibold text-sm">{{$message}}</span>
@enderror

        </div>

<div class=" block justify-between mb-10 w-3/4">

<textarea name="body" id="editor" placeholder="write Blog" class="w-3/5  px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 focus:border-4 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" style="height: 140px;" >{{old('body')}} </textarea>
@error('body')
<span class="text-red-600 font-semibold text-sm">{{$message}}</span>
@enderror
</div>
<div class=" block justify-between mb-10 w-3/4">
    <x-inputs.select name="tag_id[]" multiple/>
    @error('tag_id')
<span class="text-red-600 font-semibold text-sm">{{$message}}</span>
@enderror
</div>


        <button class="mt-6 bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded shadow-sm" type="submit">
          Publish Post
   </button>
</form>
        </div>




        <!-- Print Template -->

        <!-- /Print Template -->


    </div>


    </div>
</div>
</div>
</center>
</x-layout>
