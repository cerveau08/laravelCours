<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Malick';
        $user = array(
            ""
        );
        return view('user', compact('name'));
    }
}
