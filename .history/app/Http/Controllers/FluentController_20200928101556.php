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
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 .'<br>';

        $string = Str::of('Hello')->append('World');
        echo $string;

        $result = Str::of('LARAVEL')
    }
}
