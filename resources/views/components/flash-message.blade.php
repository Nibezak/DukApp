<div class="fixed top-0 mt-6 z-10 bg-gray-50 w-full ">
@if(session()->has('success'))
<div class=" transition transform duration-500 "
x-data="{show :true }"
x-init= "setTimeout(() => show = false , 3000)"
x-show = "show">

    <div class="nortification animateOpen h-2 fixed button-0 right-3 py-3 ">
        <div class="bg-blue-600 font-semibold text-white border-2 border-blue-500 rounded-lg shadow-xl px-2 py-1 border-1 border-gray-400">
            {{session()->get('success')}}
        </div>
    </div>
</div>
@endif
</div>



