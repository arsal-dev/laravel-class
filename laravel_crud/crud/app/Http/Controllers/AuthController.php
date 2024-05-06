<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {

        $remember = false;

        if (isset($request->all()['remember'])) {
            $remember = true;
        }

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $auth_res = Auth::attempt(['email' => $request->all()['email'], 'password' => $request->all()['password']], $remember);

        if ($auth_res) {
            return redirect('/');
        } else {
            return redirect('login')->with('error', 'username or password is incorrect');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:confirm_password',
        ]);

        $hashed_password = Hash::make($request->all('password')['password']);

        User::create([
            'name' => $request->all('name')['name'],
            'email' => $request->all('email')['email'],
            'password' => $hashed_password,
        ]);

        $auth_res = Auth::attempt(['email' => $request->all('email')['email'], 'password' => $request->all('password')['password']]);

        if ($auth_res) {
            return redirect('/');
        } else {
            return redirect('register')->with('error', 'something went wrong please contact someone');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
