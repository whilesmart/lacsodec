<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\CsoController;
use App\Http\Controllers\ExpertController;
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

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/cso-library', function () {
    return view('cso-library');
})->name('cso-library');

Route::get('/blog/{blog}', [ArticleController::class, 'show'])->name('blog-details');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/grants', function () {
    return view('grants');
})->name('grants');

Route::get('/blog', [ArticleController::class, 'index'])->name('blog');

Route::get('/lodge', function () {
    return view('lodge');
})->name('lodge');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/cso-directory', [CsoController::class, 'indexDirectory'])->name('cso-directory');

Route::get('/cso-directory-details/{cso}', [CsoController::class, 'show'])->name('cso-directory-details');

Route::get('/expert-directory', [ExpertController::class, 'index'])->name('expert-directory');

Route::get('/expert-directory-details/{expert}', [ExpertController::class, 'show'])->name('expert-directory-details');

Route::get('/login', [LoginController::class , 'create'])->name('login');
Route::post('/login', [LoginController::class , 'store'])->name('login.perform');
Route::get('/register', [RegisterController::class , 'create'])->name('register');
Route::post('/signup', [RegisterController::class , 'store'])->name('register.perform');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/cso-library', [CsoController::class , 'index'])->name('cso-library');

Route::get('/impact-stories', function () {
    return view('impact-stories');
})->name('impact-stories');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class , 'destroy']);
});
