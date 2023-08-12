<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        $countUser = User::where('status', '1')->count();
        return view('user.index', compact('users', 'countUser'));
    }

    public function add()
    {
        return view('user.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|min:5|unique:users',
            'password' => 'required|min:5'
        ]);

        $user = new User(); //nama model

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password')); //Hash untuk meng enkripsi password dengan metode bcrypt

        $user->save();

        return redirect()->route('users.index');
    }
}
