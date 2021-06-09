<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'App\Http\Controllers\ProductsController@show');

//Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');


//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'first' => 'Hello, this is my first blog!',
//        'second' => 'Hello, this is my second blog!'
//    ];
//
//    if(! array_key_exists($post, $posts)) {
//        return abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', ['name' => $posts[$post]]);
//});

