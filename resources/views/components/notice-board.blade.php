@props(['ad'])
<div class="shadow-lg ">
    <a href="https://www.youtube.com/channel/UCwk7eIb_6omKANWoedv5Hfw" target="_blank">    <div class="mt-2 flex items-center p-4 bg-white rounded-lg shadow-xs">
<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
<img src="/images/logo.jpg" class="w-12 h-12 rounded-full">
</div>
<div>
<p class="mb-2 text-sm font-medium text-gray-700">
DukApp
</p>
<p class="text-md  font-semibold text-gray-500">
Get The Mobile App
</p>
</div>
</div></a>

{{-- <div class="mt-2 flex items-center p-4 bg-white rounded-lg shadow-xs">
<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">

<img src="/images/chime.png" class="w-16">
</div>
<div>
<p class="mb-2 text-sm font-medium text-gray-600">
Sponsor-ship
</p>
<a href="#" class="text-blue-500">Create an Account</a> <p class="text-gray-600 font-mono"> for free and make your banking experience easier</p>
</div>
</div> --}}
</div>
<div class="py-2 bottom-0 transition transform duration-500 "
x-data="{show :false }"
x-init= "setTimeout(() => show = true , 1000)"
x-show = "show">
@if($ad)
{!!$ad->content!!}
@else
<div class=" py-3 mt-2 mb-2 pb-1 pt-2 bg-gray-200 px-6 round-md text-gray-500 ">
        It Appears , nothing Has been added  Contact us to earn this , Ad Spot <a class="text-blue-500" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">DukApp@gmail.com
        </a>
    </div>
@endif
{{-- <div class="px-8 mt-10">
                    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <ul>
                            <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to download the App?</a></li>
                            <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to go premium on the App?</a></li>
                            <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-How to Give feedback?</a>
                            </li>
                            <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to use the App?</a></li>
                                     <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to Update the app?</a></li>

                                     <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to add Items?</a></li>

                                     <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to place orders?</a></li>

                                     <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to create a receipt?</a></li>

                                     <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    How to Add a Partner?</a></li>

                            <li class="flex items-center mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Why I should you the App?</a></li>

                        </ul>
                    </div>
                </div> --}}
</div>
<div>
    <a href="https://mail.google.com/mail/u/0/#inbox" class="text-gray-400 font-light">want to earn a place on the notice board? Talk to us on Gmail
        <span class="text-blue-500 px-3 py-3 mb-2">DukApp@gmail.com< </span></a>
</div>
