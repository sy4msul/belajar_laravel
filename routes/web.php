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

Route::get('/greeting', function () {
    return 'Hai';
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'admin user';
    });

    Route::get('/admins', function () {
        return 'admin admin';
    });
});

Route::get('/user/{name}', function ($name) {
    return 'Selamat Datang:' . $name;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Anda di post' - $postId - 'komen ke : ' - $commentId;
});
