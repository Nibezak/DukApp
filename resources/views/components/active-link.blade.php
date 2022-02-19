
   @php
$classes = 'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-blue-500 dark:hover:text-gray-200 ';
   @endphp
   <a  {{$attributes(["class" => $classes])}}>

                {{$slot}}
</a>


