<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
Use App\Models\Comments;
class PostCommentsController extends Controller
{

         public function store(Post $post, Request $request)
         {
            //validate the post comment
          $request->validate([
            'body' => ['required']
          ]);
            // add a comment to the given post
            $post->comments()->create([
                'user_id' => $request->user()->id,
                'body' => request('body'),
            ]);
            //redirect back
            //
            return back()->with('success', 'Comment added');

         }
}
