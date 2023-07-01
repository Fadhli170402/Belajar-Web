<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Ucup",
        "email" => "fadliadliana5@gmail.com",
        "image" => "merah.jpg"
    ]);
});



Route::get('/post', [PostController::class, 'index']);

// halama  singel route
Route::get('/post/{post:slug}', [PostController::class, 'show']);
