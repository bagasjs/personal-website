<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    }

    public function store(Request $request)
    {
        
    }

    public function logout(Request $request)
    {
        
    }
}
