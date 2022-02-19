<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Ad;
class AuthorsController extends Controller
{



    public function show(User $author)
    {
    $author = $author->posts;
    $ads= Ad::all()->random();
    return view('authors.authorPosts',[
    'posts' => $author,
    'tags' => Tag::all(),
    'ads' => $ads

    ]);
    }
}
