<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('guest.login');
    }

    public function create(){
        return view('guest.sign');
    }

    public function store(Request $request){
        $user=$request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
            'password'=>'required|confirmed|min:3|max:16',
        ]);

        $user['password'] = Hash::make($user['password']);

        User::create($user);

        return redirect('/');
    }
    
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/dashboard');
    }

    return back()->withErrors([
        'login' => 'Your email or password is incorrect',
    ])->onlyInput('email');
}
public function logout()
{
    Session::flush();

    Auth::logout();

    return redirect('/login');
}
}
