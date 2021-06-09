<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'first' => 'Hello, this is my first blog!',
            'second' => 'Hello, this is my second blog!'
        ];

        if(! array_key_exists($post, $posts)) {
            return abort(404, 'Sorry, that post was not found.');
        }
        return view('post', ['name' => $posts[$post]]);
    }
}
