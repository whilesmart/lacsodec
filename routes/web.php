<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\PasswordResetController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CsoController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider and all of them will | be assigned to the "web" middleware group. Make something great! | */

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact-mail');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/blog/{blog}', [ArticleController::class, 'show'])->name('blog-details');

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/event/{event}/participate', [EventController::class, 'createRegistration'])->name('event-participate');
Route::post('/event/{event}/participate', [EventController::class, 'participate'])->name('event-participate-store');

Route::get('/grants', function () {
    return view('grants');
})->name('grants');

Route::get('/blog', [ArticleController::class, 'index'])->name('blog');

Route::get('/lodge', [AccomodationController::class, 'index'])->name('lodge');

Route::get('/lodge-details/{accomodation}', [AccomodationController::class, 'show'])->name('lodge-details');
Route::post('/lodge/{accomodation}/book', [AccomodationController::class, 'book'])->name('book-lodge');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/cso-directory', [CsoController::class, 'index'])->name('cso-directory');

Route::get('/cso-directory-details/{cso}', [CsoController::class, 'show'])->name('cso-directory-details');

Route::get('/expert-directory', [ExpertController::class, 'index'])->name('expert-directory');

Route::get('/human-resource-directory', [HumanResourceController::class, 'index'])->name('human-resource-directory');

Route::get('/expert-directory-details/{expert}', [ExpertController::class, 'show'])->name('expert-directory-details');

Route::post('/expert/mail/{expert}', [ExpertController::class, 'sendMail'])->name('send-expert-mail');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.perform');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/signup', [RegisterController::class, 'store'])->name('register.perform');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetMail'])->name('password-reset-mail');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'store'])->name('password.update');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/impact-stories', function () {
    return view('impact-stories');
})->name('impact-stories');

Route::get('/search-results', [SearchController::class, 'search'])->name('search-results');

Route::get('/locale/{locale}', [LocalizationController::class, 'changeLang'])->name('locale.setting');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'store'])->name('newsletter-subscribe');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/register-expert-profile', [ExpertController::class, 'create'])->name('register-expert-profile');
    Route::post('/register-expert-profile', [ExpertController::class, 'store'])->name('store-expert');

    Route::get('/register-cso', [CsoController::class, 'create'])->name('register-cso');
    Route::post('/register-cso', [CsoController::class, 'store'])->name('store-cso');
    Route::get('/my-csos', [CsoController::class, 'userCsos'])->name('my-csos');
    Route::post('/cso/delete/{cso}', [CsoController::class, 'delete'])->name('delete-cso');

    Route::post('/blog/{blog}/comment', [ArticleController::class, 'comment'])->name('post-comment');
});
