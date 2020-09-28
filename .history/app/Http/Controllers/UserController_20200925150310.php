<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Malick';
        $users = array(
            "name" => "Maya Van",
            "email" => "mayacerv@gmail.com",
            "phone" => "123456789"
        );
        return view('user', compact('name', 'users'));
    }
}
