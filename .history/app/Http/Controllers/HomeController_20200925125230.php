<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name)
    {
        return 'Salut venant de HomeController, Name :';
    }
}
