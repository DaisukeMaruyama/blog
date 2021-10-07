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
            'username' => 'required | min:3 | max:255',
            'email'=> 'required | email | max:255',
            'password' => 'required | min:6 | max:255',
        ]);

        // passwordを暗号化するのはUser.phpで

        User::create($attributes);

        return redirect('/');
    }
}
