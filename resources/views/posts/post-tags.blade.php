    <x-layout>

    <x-navbar/>
    <div class="px-6 py-8">



    <div class="container flex justify-between mx-auto">
    <div class="w-full lg:w-8/12">
    <div class="flex items-center justify-between">
    <x-action-button>

    <x-previous-page-link />
    {{-- {{$posts->name}} --}}
    </x-action-button>

    <x-filters-bar />

    </div>
    @foreach($posts as $post)
    <div class="mt-6 max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between">

    <span class="font-semibold text-gray-600">

    {!!$post->created_at->diffForHumans()!!}

    </span>

    @foreach( $post->PostgridCardTags as $tag )

    <x-tag-link href="/tags/{{$tag->slug}}">

    {!! $tag->slug !!}

    </x-tag-link>

    @endforeach

    </div>

    <div class="mt-2">
               @if(isset($post->photo))
    <div class="mb-6  flex justify-center">
<a href="/posts/{{$post->slug}}">
    <img src="{{ $post->photo}}" class="h-52 rounded-md w-full">
</a>
    </div>
    @endif
    <a href="/posts/{{$post->slug}}" class="text-2xl font-bold text-gray-700 underline">
    {{$post->title}}
    </a>
    <div class="space-y-4 lg:text-lg leading-loose">
    {{$post->verse}}
    </div>




    </div>

    <div class="flex items-center justify-between mt-4">
    <!-- component -->
    <!-- This is an example component -->
    <div class="flex justify-center items-center">
    <x-star-rating :post="$post" />

    </div>
    <div>
<a href="/authors/{{$post->author->username}}" class="flex items-center">

<p class="font-semibold text-base inline-flex">
<span class="hidden lg:block md:block ">post by</span> <span class="font-bold px-2">
{{$post->author->username}}
</span>
</p>

    <img src="{{$post->author->avatar}}" alt="" width="30" height="30" class="rounded-full">


</a>
    </div>
    </div>
    </div>
    @endforeach


    </div>

    <div class="px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">
    <x-notice-board :ad="$ads"/>


    </div>

    </div>




    <div class="mt-8">
    <x-pagination-bar />
    </div>
    </div>




    </x-layout>
