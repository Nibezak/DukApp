    <nav class="px-6 py-4 bg-gray-800 shadow">
    <div class=" flex flex-col mx-auto md:flex-row md:items-center md:justify-around">
    <div class="flex items-center justify-around">

    @auth
    <div class="md:hidden lg:hidden">
<x-account-button />
    </div>
@else
<div class="md:hidden lg:hidden">
<x-login-button/>
</div>
    @endauth
    </div>
    <x-navbar-links />

    </div>

    </nav>
