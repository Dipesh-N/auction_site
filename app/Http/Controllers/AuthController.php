<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{

    public function register(Request $request) {


   $arr = $request->validate(
        [
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users,username'],
            'email' => ['required', 'max:255', 'email', 'unique:users,email'],
            'password' => ['required', 'min:3', 'confirmed'],
        ],
        [
            'username.unique' => "Username already taken",
            'email.unique' => "This email is already registered"
        ]
    );
// dd($arr);
    $user = User::create($arr);

    return view('posts.index');
}

    public function login(Request $request)
    {
        $request->validate(
            [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (auth()->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('layout2');
        }
        else
        {
            return back()->withErrors(['login' => 'Wrong username or password'])->withInput();
        }
    }
    
}
