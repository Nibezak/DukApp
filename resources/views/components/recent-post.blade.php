@props(['posts'])

<div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">

<div class="inline-flex items-center justify-center">


@foreach($posts->tags->take(3) as $tag)
<x-tag-link href="/tags/{{$tag->slug}}" class="mx-2 px-2">
{{$tag->slug}}
</x-tag-link>
@endforeach

</div>

<div class="mt-4">
<a href="/posts/{{$posts->slug}}"
class="text-lg font-medium text-gray-700 hover:underline">
{!!$posts->title!!}
</a>
</div>

<div class="flex items-center justify-between mt-4">

<div class="flex items-center">
<img
src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
alt="avatar" class="object-cover w-8 h-8 rounded-full">
<a href="/authors/{{$posts->author->username}}"
class="mx-3 text-md font-semilbold text-gray-700 hover:underline">
{{$posts->author->username}}
</a>
</div>
<span
class="text-sm font-light text-blue-600">
{{$posts->created_at->diffForHumans()}}
</span>

</div>

</div>

