<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\S

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = http::get('https://jsonplaceholder.typicode.com/posts');
    }
}
