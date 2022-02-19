 <x-layout>

    <x-navbar/>
    <div class="px-2 py-8">



    <div class="container flex justify-between mx-auto">
    <div class="w-full px-3 ">
    <div class="flex items-center justify-between">
    <x-action-button>

    <x-previous-page-link />

    </x-action-button>

    <x-filters-bar />

    </div>
    <div class="mt-6 max-w-6xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between">

    <span class="font-semibold text-gray-600">

    {!!$post->created_at->diffForHumans()!!}

    </span>

    @foreach( $post->tags as $tag )

    <x-tag-link href="/tags/{{$tag->slug}}">

    {!! $tag->slug !!}

    </x-tag-link>

    @endforeach

    </div>

    <div class="mt-2">
    <h1  class="text-xl lg:text-4xl  font-bold p-4 text-gray-700 ">
    {!! $post->title !!}
    </h1>
    <x-read-time>
         {{ read_time($read_time)}}
    </x-read-time>
    <div class="space-y-4 lg:text-lg leading-loose">
    {!! $post->body !!}
    </div>




    </div>

    <div class="block md:flex flex-shrink-0 items-center justify-end mt-4">
    <!-- component -->
    <!-- This is an example component -->
{{-- <div>
<div class="w-full  flex justify-start">
    <x-star-rating :post="$post" />
</div>
<span class="font-normal  inline-flex text-gray-600 mx-6">
  Ratings:  <p class="px-2">{{ floatval($averageReview)}}</p>
</span>
</div> --}}
    <div>
    <a href="/authors/{{$post->author->username}}" class="inline-flex justify-between items-center">

    <p class="font-semibold text-base px-4">
     <span class="font-bold">
    {{$post->author->username}}
    </span>
    </p>

    <img src="{{$post->author->avatar}}" alt="" width="30" height="30" class="rounded-full">

    </a>

    </div>
</div>
    </div>



    </div>

    <div class=" px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">
    <div>
         <x-notice-board :ad="$ads"/>
    <!-- component -->
    <section>
        <x-comment-section.add-comment :post="$post"/>
    </section>

    <section>
@foreach($post->comments as $comment)
<x-comment-section.comment-block :comment="$comment" />
@endforeach
</section>
    </div>
    </div>

    </div>
    {{-- visible only on mobile devices --}}
    <section class="block lg:hidden md:hidden">
        <div class="py-6 px-4 ml-2">

        <x-comment-section.add-comment class="px-6" :post="$post"/>
        </div>

@foreach($post->comments as $comment)
<x-comment-section.comment-block class="px-10" :comment="$comment" />
@endforeach

</section>


    </div>


<div class="container">
<x-progress-bar />
</div>

    </x-layout>
