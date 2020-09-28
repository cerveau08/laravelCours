<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of('Welcome to my YouTube Channel')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 .'<br>';

        $string = Str::of('Hello')->append('World');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('laravel 7.0')->replace('7.0', '8.0');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted. '<br>';

        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of(' Laravel Framework')->substr(8,5);
        echo $str .
    }
}
