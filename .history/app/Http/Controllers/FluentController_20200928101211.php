<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my YouTube Channel')->Str::after('Welcome to');
        echo 
    }
}
