<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }


    public function store()
    {
        //validate
        $attr = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //attempt to login
        if (!Auth::attempt($attr)) {
            throw ValidationException::withMessages([
                'email' => 'Wrong credentials'
            ]);
        };

        // regenerate the session token
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
