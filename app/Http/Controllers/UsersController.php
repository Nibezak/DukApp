<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class UsersController extends Controller
{

         public function profile()
     {
         $author = auth()->user();
        return view('accounts.profile',compact('author'));
     }

      public function author_access(User $author)
      {
                return view('accounts/authors/show', compact('author'));
      }
}
