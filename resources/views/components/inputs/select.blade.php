@props(['tags'])
   @php
  $tags = \App\Models\Tag::all();
  @endphp
  <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:focus:shadow-outline-gray" name="tag_id"
multiple >
  @foreach($tags as $tag)
  <option value="{{$tag->id}}" class=" mr-12 w-full hover:bg-blue-500 hover:text-white">{{$tag->name}}</option>
  @endforeach
</select>

<p class="text-gray-400 text-sm pt-2 my-2">Hold <kbd class="border bg-gray-300 px-2 mx-3 rounded-md shadow-sm text-white">Ctrl</kbd> to Select multiple tags to copy text (Windows).</p>
<p class="text-gray-400 text-sm block">Hold <kbd class="border bg-gray-300 px-2 mx-3 rounded-md shadow-sm text-white">Cmd</kbd> to Select multiple tags to copy text (Mac Os).</p>

