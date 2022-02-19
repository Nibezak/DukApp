<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
     public function index()
     {
          $ads = Ad::latest();
          return view('accounts/admins/sponsors.index',
               [
                    'ads' =>$ads->Paginate(20)
               ]);
     }
      public function create()
      {
          return view('accounts/admins/sponsors/create');
      }
      public function store()
      {
         $attributes = request()->validate([
               'content' => 'required',
               'sponsor_name' => 'required|max:155|min:4',
               'price' => 'numeric|required',
               'title' => 'required|min:3|max:155'
          ]);
          Ad::create($attributes);
      return redirect(route('sponsors'));
      }
      public function destroy(Ad $ad)
      {
        $ad->delete();
        return back()->with('success', 'Ad has been deleted');
      }
}
