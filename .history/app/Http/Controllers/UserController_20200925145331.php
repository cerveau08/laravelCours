<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Malick';
        $user = array(
            "name" => "Maya Van",
            "email" => "smjohn@gmail.com",
            phone
        );
        return view('user', compact('name'));
    }
}
