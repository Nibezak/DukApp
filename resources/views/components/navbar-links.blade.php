<div class="flex-col hidden md:flex md:flex-row md:-mx-4">
@auth
<x-account-button />
@else
<x-login-button/>
@endauth
</div>
