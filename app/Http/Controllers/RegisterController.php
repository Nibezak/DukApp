<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
    use Illuminate\Validation\Rule;
    use Illuminate\Support\Facades\Auth;

    class RegisterController extends Controller
    {

        public function create()
        {
            return view('auth.register.create');
        }

        public function store()
        {
          $attributes =  request()->validate([
                'username' => ["required","max:30","min:3",Rule::unique('users','username')],// one way to validate the username
                'name' =>   ['required', 'max:255', 'min:5'],
                'email' =>  ['required', 'max:255', 'email',"unique:users,email"],// you can use this approach to the username as well
                'password' => ['required', 'max:255', 'min:6','confirmed']
            ]);
            $user = User::create($attributes);
            Auth::login($user);
            session()->flash('success', 'Your account has been created');
            return redirect('/');
        }
    }










      // 'password' => [
      //       'required',
      //       'confirmed',
      //       Password::min(8)
      //           ->mixedCase()
      //           ->letters()
      //           ->numbers()
      //           ->symbols()
      //           ->uncompromised(),
      //   ],
