@php
use Illuminate\Support\Facades\Auth;
$author = Auth::user();
@endphp
@auth
@props(['post'])
<div {{$attributes->merge(["class"=>"flex mx-auto items-center justify-center shadow-lg  mx-8 mb-4 max-w-lg"])}}>
   <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2" method="POST" action="/post/{{$post->slug}}/comments">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
             <div class="pr-2 px-2 inline-flex">
        <img src="{{$author->avatar}}" class="w-8 h-8 flex flex-shrink-0 rounded-full border border-8 border-gray-200">
        <span class="px-2 py-1 text-sm font-semibold text-gray-900">{{Auth::user()->username}}</span>
        </div>
         <div class="w-full md:w-full px-3 mb-2 mt-2">
            <textarea class="bg-gray-100 text-sm rounded
             border border-gray-400 leading-normal
             resize-none w-full h-20 py-2 px-3
             font-medium placeholder-gray-700 focus:outline-none focus:bg-white
             @error('body') border border-4 border-red-500  @enderror" name="body" placeholder='Type a Comment' required></textarea>
         </div>
         <div class="w-full md:w-full inline-flex items-start md:w-full px-3">

            <div class="-mr-1">
               <button type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">add Commment</button>
            </div>
         </div>
      </form>
   </div>
   @else
{{--    <p class="text-sm  ">
   <a href="{{ route('login') }}" class="text-blue-500">Login</a> or <a href="{{route('register') }}" class="text-blue-500">create an account</a> , to add a comment
</p> --}}
@endauth
