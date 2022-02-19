<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AdminSettingsController extends Controller
{
     public function index(User $author)
     {
        $author = Auth::user();
        return view('accounts/admins/settings/index' , compact('author'));
     }

     public function update(User $author)
     {

     }
}
