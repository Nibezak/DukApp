    {{-- the layout file applied on every file on the project --}}

    <x-layout>
    {{-- the navbar contains the project's logo and the subscription link --}}
    @if($posts->count())
    <x-navbar/>


    <div class="px-6 py-8"> {{-- In referrence of the slot which contains everything visible to the page --}}




    <div class="w-full lg:w-full">
    <div class="flex items-center justify-around">
    {{-- the action button will display "All Posts " if we are at the home page and display a "Go back " BUTTON if we are elsewhere --}}
        <x-action-button class="inline-flex tracking-widest">
          <p class="text-xl font-base font-normal">  results for <span class="font-semibold underline">{{request('search')}}</span><p>
    </x-action-button>

    <x-filters-bar />{{--  show all filters --}}
    </div>

    <div class="lg:grid lg:grid-cols-3 lg:gap-4">
    @foreach( $posts as $post )
    <div>

    <x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? 'col-span-2 ' : 'col-span-3'}}"/>

    </div>

    @endforeach
    </div>




    </div>



    <div class="mt-8">
    <x-pagination-bar />
    </div>
    </div>
    @else
   {{abort(404)}}
    @endif

    </x-layout>
