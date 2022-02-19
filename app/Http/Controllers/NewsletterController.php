<?php

namespace App\Http\Controllers;
use App\Services\Newsletter;
use Illuminate\Http\Request;
use Exception;
use  Illuminate\Validation\validationException;


class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
    request()->validate(['email' => 'required|email',]);
    try{
    $newsletter->subscribe(request('email'));
    }
    catch (\Exception $e){
    throw validationException::withMessages([
    'email' => 'This Email could not be added , Sorry!.'
    ]);
    }
    // session()->flash('success', 'Successfully signed up');
    return back()->with('success', 'Succesfully signed up!');

    }
}
