
<x-layout>

<!-- component -->

<div x-data="{ open: false }" class="bg-gray-800 p-2 mt-0 fixed w-full z-10 top-0 flex flex-col  px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8   ">
    <div class="p-4 flex flex-row items-center justify-between ">
<a href="index">
<div class="flex">
                    <img src="/svg/dukapp-svg.svg" class=" shadow-lg">
                    <p class="inline-block py-2 px-4 text-gray-100 font-semibold text-xl no-underline " href="#">DukApp</p>
</div>
                </a>

      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>

    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="inline-flex flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">


          <a class="inline-block py-2 px-4 text-gray-100 font-semibold text-sm no-underline border-b-1 border-gray-300" href="/posts">ARTICLES</a>

          <a class="inline-block py-2 px-4 text-gray-100 font-semibold  text-sm  no-underline border-b-1 border-gray-300" href="features">FEATURES</a>

          <a class="inline-block py-2 px-4 text-gray-100 font-semibold  text-sm no-underline border-b-1 border-gray-300" href="download">DOWNLOAD</a>

          <!-- <a class="inline-block py-2 px-4 text-gray-100 font-semibold text-sm  no-underline border-b-1 border-gray-300" href="#">SECURITY</a> -->

          <a class="inline-block py-2 px-4 text-gray-100 font-semibold  text-sm  no-underline border-b-1 border-gray-300" href="helpCenter">HELP CENTER</a>


    </nav>

  </div>
<section class="bg-white dark:bg-gray-800">

    <div class="container flex flex-col py-4 mx-auto  md:h-128 md:py-16 md:flex-row md:items-center w-9/12 mt-24 md:space-x-6">
        <div class="flex flex-col items-center w-full  md:flex-row md:w-3/5">


            <div class="max-w-lg md:mx-12 md:order-2">
                <h1 class="block text-2xl font-light  text-gray-800 dark:text-white md:text-4xl">Simple. Secure. Reliable Storage.</h1>
                <p class="mt-4 text-gray-600 dark:text-gray-300 text-lg">With DukApp, you'll get fast, simple, secure Storage and keeping track For free*, available on phones all over the world.
                </p>
                <p class="text-sm text-gray-300 mt-3 ">* Data charges may apply. Contact your provider for details</p>

                  <div class="mt-6 flex">
                    <img src="/svg/android-svg.svg" class="w-6 h-6 inline-block" style="color: #00a84f;">
                    <span class="px-3 font-semibold inline-block" style="color:#00a84f;">Android</span>
                </div>

                     <div class="mt-6 flex">
                    <img src="/svg/apple-svg.svg " class="w-6 h-6 inline-block">
                    <span class="px-3 font-semibold inline-block" style="color:#00a84f;">Apple</span>
                </div>

                   <div class="mt-6 flex">
                    <img src="/svg/desktop-svg.svg " class="w-6 h-6 inline-block">
                    <span class="px-3 font-semibold inline-block pb-8" style="color:#00a84f;">Mac or Windows</span>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center   md:w-1/2">
            <img class="object-cover  border-8 border-gray-800 rounded-md" src="/images/app-preview.jpeg" width="300" height="320" alt="apple watch photo">
        </div>
    </div>
</section>
<!-- end of section 1 -->

<!-- section 2 -->



<div class="block md:grid grid-cols-2 gap-4 py-12">


<div class="inline-block w-full border-r-8 border-white px-6 pt-6 items-center justify-center rounded-md`" style="background: #D8E8EA;">
    <center>
        <div class="mt-12 justify-center text-center items-center">
            <div class="py-4 mb-5 pt-2">
            <h1 class="text-3xl font- font-thin  ">DukApp Business App</h1>
            </div>


           <p class="text-sm my-1"><a class="text-blue-500"> DukApp Business</a> is a free to download app that was built with the small</p>
           <p class="text-sm my-1"> business owner in mind. Create a catalog to showcase your products and</p>
           <p class="text-sm my-1"> services. Connect with your customers easily by using tools to automate, sort and</p>
           <p class="text-sm my-1"> quickly respond to messages.</p>
<div class="my-6">

 <p class="text-sm my-1">DukApp can also help medium and large businesses provide customer support</p>
 <p class="text-sm my-1">and deliver important notifications to customers. Learn more about <a class="text-blue-500">DukApp Business API.</a></p>
</div>
    <div class="flex justify-center pt-8 my-4">
        <img src="./images/app-preview-2.jpg" class="border-8 border-gray-800 rounded-md" width="200" height="200">
    </div>
        </div>
    </center>
</div>


  <div class=" w-full border-r-8 border-white px-6 py-6 items-center justify-center rounded-md" style="background: #E7F0E4;">

        <center>
        <img src="./images/new-app.gif" width="200" height="200" class="pt-8 rounded-full">
    </center>
                <h1 class="text-md font-normal text-center my-10 text-gray-400 font-sans mt-24">END-TO-END ENCRYPTION</h1>
            <h1 class="text-3xl text-center py-3 font-thin ">Security by Defaulty</h1>
            <div class=" justify-center w-full px-10 pb-16">
           <p class="text-center font-light">Some of your most personal moments are shared on DukApp,</p>
           <p class="text-center font-light">which is why we built end-to-end encryption into the latest</p>
           <p class="text-center font-light">versions of our app. When end-to-end encrypted, your messages</p>
           <p class="text-center font-light">and calls are secured so only you and the person you're</p>
           <p class="text-center font-light">communicating with can read or listen to them, and nobody in</p>
           <p class="text-center font-light">between, not even DukApp.</p>

      </div>

    </div>
</div>


<div class="w-full py-10 px-2">
<center>
  <a href="features"><button class="border-4 border-gray-600 px-4 py-4 text-gray-600 tracking-widest text-sm font-semibold  rounded-full">
    EXPLORE FEATURES
  </button></a>
</center>
</div>

<!-- end of section 2 -->


<!-- footer section -->

<!-- component -->


<footer class="bg-gray-800 pt-10 sm:mt-10 pt-10">
    <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">
        <!-- Col-1 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
               DukApp
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Features
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
              Security
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
           Download
            </a>
            <a href="/posts" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
              Articles
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
              Business
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
          Privacy
            </a>

        </div>

        <!-- Col-2 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
               Company
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
              About
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
               Careers
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Brand Center
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Get in touch
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Blog
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
              DukApp Stories
            </a>

        </div>

        <!-- Col-3 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
      DOWNLOAD
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
               Mac/PC
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Android
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
      iPhone
            </a>

        </div>

        <!-- Col-3 -->
        <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
               HELP
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
              Help Center
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Twitter
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
             Facaebook
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Coronavirus
            </a>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="pt-2">
        <div class="flex pb-5 px-3 m-auto pt-5
            border-t border-gray-500 text-gray-400 text-sm
            flex-col md:flex-row max-w-6xl">
            <div class="mt-2">
                © Copyright 2021. All Rights Reserved.
            </div>

            <!-- Required Unicons (if you want) -->
            <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
     <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
      Privacy & Terms

            </a>
            </div>
        </div>
    </div>
</footer>

</x-layout>