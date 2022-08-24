<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required']

        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/endpoint')->with('success, Your account have been created!');
        }

        throw ValidationException::withMessages([
            'emil'=>'You have provided credentials could not be verified'
        ]);
    }
}
