<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Auth;
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // insert user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = "staf";
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/')->with('sukses', 'Registes sukses');
    }
    public function postlogin(Request $request)
    {
        $login = $request->only('email', 'password');

        if (Auth::attempt($login)){
            $user = Auth::User();
            if($user->role == 'admin'){
                return redirect('/homebarang');
            }
            if($user->role == 'staf'){
                return redirect('/viewstaf');
            }
        }
        return redirect('/');
    }
}
