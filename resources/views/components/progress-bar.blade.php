<div x-data="scrollProgress" class="fixed inset-x-0 top-0 z-50 ">
        <div class="h-1 bg-blue-500" :style="`width: ${percent}%`"></div>
    </div>
<div class="hidden lg:block md:block">
<div
      x-data="scrollProgress"
      class="fixed inline-flex items-center justify-center overflow-hidden rounded-full bottom-5 left-5">
      <!-- Building a Progress Ring: https://css-tricks.com/building-progress-ring-quickly/ -->

      <span class="absolute text-xl text-blue-700" x-text="`${percent}%`"></span>
    </div>
</div>
