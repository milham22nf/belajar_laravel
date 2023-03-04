<?php

use App\Http\Controllers\PostController;
use app\Http\Controllers\UserController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegisterController;
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

Route::get('/home', function () {
    return view (' home', [
        "title" => "home",
    ]);
});

Route::get('/register', [UserController::class, 'register'])-> name('register');

Route::get('/about', function () {
    return view ('about', [
        "title" => "about",
        "name" => "Muhamad Ilham Nurul Falah",
        "email" => "muhamadilhamnurulfalah@gmail.com",
        "image" => "kram.jpeg",

    ]);
});



Route::get('/blog', [PostController::class, 'index']);


//halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);


Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'index']);


Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);