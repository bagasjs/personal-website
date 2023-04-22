<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function authenticate(Request $request)
    {
        $validData = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if(Auth::attempt($validData, true)) {
            $request->session()->regenerate();
            return redirect()->intended("/home");
        }
        
        return back()->with("error", "Invalid credentials");        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:8|confirmed"
        ]);

        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        return redirect("/auth/login")->with("success", "Account creation success");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
