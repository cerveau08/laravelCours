<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $validateData = $request->validate
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email : '.$email . ' Password: '.$password;
    }
}
