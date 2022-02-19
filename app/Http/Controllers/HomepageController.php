<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

      public function features(){
        return view('features');
    }
      public function download(){
        return view('download');
    }

      public function helpCenter(){
        return view('helpCenter');
    }
}
