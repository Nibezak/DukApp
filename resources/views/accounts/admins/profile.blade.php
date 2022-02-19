<x-admins.layouts.layouts>
          <div class="container grid px-6 mx-auto">

            <h4 class="mb-4 text-lg font-semibold text-blue-500 dark:text-gray-300">
            All users
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">


                 <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Author</th>
                      <th class="px-4 py-3">Role</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Edit / Delete</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($authors as $author)

                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="{{$author->avatar}}" alt="" loading="lazy">
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                          </div>
                     <div>
                            <a href="/accounts/author/{{$author->username}}" class="font-semibold hover:underline">{{$author->name}}</a>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              {{$author->username}}
                            </p>
                          </div>
                          </div>
                        </div>
                      </td>

          <td class="px-4 py-3 text-xs">
          @if($author->is_Admin)
      <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
          Admin
     </span>
          @else
          <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
            Editor
            </span>
          @endif

          </td>
                      <td class="px-4 py-3 text-sm">
                       {{$author->created_at->diffForHumans()}}
                      </td>
                      <td class="px-4 py-3">
                                    @if(!$author->is_Admin)
                        <div class="flex items-center space-x-4 text-sm">
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>
                          </button>

                          <form method="POST" action="/accounts/admins/{{$author->username}}">
                            @method('DELETE')
                            @csrf
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete" type="submit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </form>
                        </div>
                        @endif
                      </td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>
<div class="px-10 py-2 my-1 mb-3">
  {{$authors->links()}}
</div>
<div class=" flex justify-around">
{{-- <div class="w-4/5 h-4/5">
{!! $authorsChart->container() !!}
{!! $authorsChart->script() !!}
</div> --}}
</div>
</x-admins.layouts.layouts>

{{-- <x-confirmation-modal>
<x-slot name="header">
Delete
</x-slot>
<x-slot name="body">
Are you sure you Want to delete <strong>{{$author->name}}</strong> By proceeding you acknowledge that this author will be parmanently deleted from the database
  </x-slot>
  <x-slot name="action">
   <form method="POST" action="/admins/accounts/{{$author->id}}">
                            @method('DELETE')
                            @csrf
              <button
            class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" aria-label="Delete" type="submit">
       Delete
         </svg>
       </button>
  </x-slot>
  </x-confirmation-modal> --}}
