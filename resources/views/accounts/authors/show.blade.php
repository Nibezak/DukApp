<x-admins.layouts.layouts>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
  <div class="px-4 py-5 sm:px-6">
    <div class="flex justify-between">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Author's Information
    </h3>
    <div>
    <x-previous-page-link />
    </div>
    </div>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Personal details and then some.
    </p>
  </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Full name
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$author->name}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Role
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if($author->is_Admin)
           <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
          Admin
     </span>
       @else
          <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
            Editor
            </span>
          @endif
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{$author->email}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Total authors Posts
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{number_format($author->posts->count())}}

        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          About
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          @if($author->about !=null)
          {{$author->about}}
          @else
          <span class="text-sm font-light text-gray-500">No User description available</span>
          @endif
        </dd>
      </div>

@unless($author->is_Admin)
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Actions
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">

            <li class="pl-3 pr-4 py-3 flex items-center justify-end text-sm">
              <div class="ml-4 flex-shrink-0">
        <x-buttons.confirmation-button class="bg-red-600 active:bg-red-600 hover:bg-red-700 focus:shadow-outline-red">
             <x-slot name="action_name">
              Delete account
             </x-slot>
            </x-buttons.confirmation-button>

              </div>
            </li>

            <li class="pl-3 pr-4 py-3 flex items-center justify-end text-sm">
              <div class="ml-4 flex-shrink-0">
                <a href="#" class="font-medium text-gray-600 hover:text-gray-500">
                Block
                </a>
              </div>
            </li>
          </ul>

        </dd>
      </div>
@endunless

    </dl>
  </div>
</div>
<x-confirmation-modal>
<x-slot name="header">
Warning!
</x-slot>
<x-slot name="body">
Are you Sure you want to Delete <strong>{{$author->name}}</strong>, By doing so you acknowledge that This user will be deleted parmanently as well as all the records associated with this user
<x-slot name="action">
       <form method="POST" action="/accounts/admins/{{$author->username}}">
                @method('DELETE')
                @csrf
<button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm" @click="open = false">
                Delect Account
              </button>
          </form>
</x-slot>
</x-slot>
</x-confirmation-modal>
</x-admins.layouts.layouts>
