    {{-- the layout file applied on every file on the project --}}
    <x-layout>
    {{-- the navbar contains the project's logo and the subscription link --}}
    <x-navbar-attributes/>

    <div class="px-6 py-8 pt-32"> {{-- In referrence of the slot which contains everything visible to the page --}}


    <div class="container flex justify-between mx-auto">
    <div class="w-full lg:w-8/12">
    <div class="flex items-center justify-between">
    {{-- the action button will display "All Posts " if we are at the home page and display a "Go back " BUTTON if we are elsewhere --}}
    <x-action-button>
    @if(request()->is('/'))
    All Posts
    @else
    <x-previous-page-link />
    @endif
    </x-action-button>

    <x-filters-bar />{{--  show all filters --}}
    </div>


    <div class="lg:grid lg:grid-cols-2 lg:gap-4">

    @forelse( $posts as $post )
    <div>
    <x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? 'col-span-2 ' : 'col-span-3'}}"/>
    </div>
    @empty
<div class="col-span-8 w-full h-full flex justify-center">
    <div class="mt-32 py-3 fixed bg-gray-200 px-6 round-md text-gray-500 ">
        It Appears , nothing Has been posted yet On this page , please check again later
    </div>
</div>
@endforelse

    </div>




    </div>
    {{-- show the most recent post --}}

    <div class="px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">

    <x-notice-board :ad="$ads"/>
    </div>

    </div>

    <div class="mt-8">
    <x-pagination-bar>
        {{$posts->links()}}
    </x-pagination-bar>
    </div>
    </div>
<x-footer/>
    </x-layout>
