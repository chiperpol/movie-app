<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function signin()
    {
        return view('auth.signin');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|min:5|unique:users',
            'password' => 'required|min:5'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('auth.signin')->with('signup_success', 'Sign Up Success! Please Sign In');
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); //function regenerate() berfungsi untuk mengatasi percobaan hacking dari memanfaatkan session sebelumnya
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function signout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); //untuk menonaktifkan session agar tidak dapat di gunakan kembali
        $request->session()->regenerateToken(); //membuat token session baru agar tidak di hack

        return redirect('/');
    }
}
