@props(['comment'])
<div {{$attributes(["class"=>"shadow-lg rounded-lg bg-white mx-auto m-8 p-4 notification-box flex"])}}>
        <div class="pr-2">
        <img src="{{$comment->author->avatar}}"  class="rounded-full border  border-8 border-gray-200"
        style="max-width: 30px;
        max-height: 30px;
        min-height: 30px;
        min-width: 30px;">
        </div>
        <div class="justify-end">

          <div class="text-sm pb-2 justify-between">
          <strong>{{$comment->author->username}}</strong>
          <p class="text-gray-400 font-md ">{{$comment->created_at->diffForHumans()}}</p>
          </div>


          <div class="text-sm text-gray-600 font-md tracking-tight ">
            <p>
            {{$comment->body}}
          </p>
          </div>
        </div>
      </div>
