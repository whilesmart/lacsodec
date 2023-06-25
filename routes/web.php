<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\CsoController;
use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider and all of them will | be assigned to the "web" middleware group. Make something great! | */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.perform');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/signup', [RegisterController::class, 'store'])->name('register.perform');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/cso-library', [CsoController::class, 'index'])->name('cso-library');

Route::get('/impact-stories', function () {
    return view('impact-stories');
})->name('impact-stories');

Route::get('/blogs', function () {
    return view('newsroom');
})->name('blogs');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'destroy']);
});

