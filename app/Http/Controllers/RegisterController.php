<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');

    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required | min:3 | max:20 | unique:users,username',
            'email'=> 'required | email | max:255 | unique:users,email',
            'password' => 'required | min:6 | max:255',
        ]);

        // passwordを暗号化するのはUser.phpで

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created.');;
    }
}
