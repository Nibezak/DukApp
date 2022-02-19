<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Review;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AdminPostsController extends Controller
{
    public function author_posts(User $author)
    {

    $posts = Auth::user()->posts()->paginate(7);
    $review = Review::avg('rating');
    return view('accounts/admins/posts.author-posts',[
    'posts' => $posts,
    'review' => $review,
    ]);
    }

    public function create()
    {
        return view('accounts.admins.posts.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {

        // Start by uploading a file to the server
        // and getting its path for the database
        $attributes = new Post($this->validateCreatedPost());
        $attributes['user_id'] = auth()->user()->id;
        $attributes['slug'] = Str::slug(request('title'));
        if($attributes['photo'] ?? false) { $attributes['photo'] = request()->file('photo')->store('photos','public');}

        $attributes->save();

        $attributes->tags()->attach(request('tag_id'));
         return redirect(route('author-posts'))->with('success', 'Post has been Published');
    }

        public function edit(Post $post)
        {
            return view('accounts/admins/posts.edit', compact('post'));
        }

            public function update(Request $request, post $post)
    {
        $attributes = $this->validateUpdatedPost();
        $attributes['slug'] = Str::slug(request('title'));
        if($attributes['photo'] ?? false) { $attributes['photo'] = request()->file('photo')->store('photos','public');}
        $post->update($attributes);
        return redirect(route('author-posts'))->with('success', 'Post Updated');
    }


        public function destroy(Post $post)
        {
        $post->delete();
        return back()->with('success', 'Deleted');
        }


     protected function validateCreatedPost()
     {
        return  request()->validate([
                'photo' => 'required|image|mimes:jpg,png,jpeg,gif',
                'title' => 'required',
                'verse' => 'required|min:100',
                'body' => 'required',
                'tag_id' => ['required',Rule::exists('tags', 'id')]
           ]);
     }
          protected function validateUpdatedPost()
     {
        return  request()->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,gif',
                'title' => 'required',
                'verse' => 'required|min:100',
                'body' => 'required',
                'tag_id' => [Rule::exists('tags', 'id')]
           ]);
     }

}
