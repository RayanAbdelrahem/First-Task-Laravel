<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attribute = request()->validate([
            'name' => ['required','min:7','max:250'],
            'username' => ['required','min:7','max:250'],
            'email' => ['required','min:7','max:250'],
            'password' => ['required','min:7','max:250'],

        ]);

        User::create($attribute);

     return redirect('/endpoint');
    }
}
