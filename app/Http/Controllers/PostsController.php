<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Review;
use App\Models\Ad;
use Illuminate\Validation\Rule;
use Mtownsend\ReadTime\ReadTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $ads = Ad::all()->random();
    $posts = Post::latest();
    if(request('search')){return $this->getPosts();}
    return view('posts.index',[
    'posts' => $posts->simplePaginate(8),
    'ads' => $ads
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $averageReview = Review::avg('rating');
    $ads = Ad::all()->random();
        return view('posts.show', [
                    'averageReview' => $averageReview,
                    'post' => $post,
                    'ads' => $ads,
                    'read_time' =>  (new ReadTime([$post]))->get(),
                ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $attributes = request()->validate([
                'photo' => 'image|mimes:jpg,png,jpeg,svg,gif|max:5048',
                'title' => 'required|max:100',
                'slug' => [Rule::unique('posts','slug')->ignore($post->id)],
                'verse' => 'required|max:315|min:100',
                'body' => 'required',
                'tag_id' => [Rule::exists('tags', 'id')]
           ]);

        $attributes['slug'] = Str::slug(request('title'));

        if(isset($attributes['photo'])){
            $attributes['photo'] = request()->file('photo')->store('photos','public');
        }
        $post->update($attributes);

          return redirect('/account/profile')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::findOrFail($id);
       $post->delete();
        return back()->with('success', 'Deleted');
    }

     public function review()
     {
        Review::updateOrInsert(
            [
            'post_id' => request()->post,
            'user_id' => request()->user()->id,
            ],
        // Update this otherwise create
            ['rating' => request()->rating]
        );
        return back()->with('success', 'Thank you for the review');
     }

     protected function getPosts()
     {
    $posts = Post::latest();


         $posts
    ->where('title', 'like', '%' . request('search') . '%')
    ->orWhere('body', 'like', '%' . request('search'). '%');



    return view('SearchPage',[
        'posts' => $posts->get()
    ]);

     }

}



//  $photoName  = $request->file('photo')->getClientOriginalName();
// $path = $request->file('photo')->move(public_path('photos'), $photoName);
//  $attributes['photo'] = 'photos/'. $photoName;
