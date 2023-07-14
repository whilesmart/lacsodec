<?php

declare(strict_types=1);

use App\Orchid\Screens\Accomodation\AccomodationEditScreen;
use App\Orchid\Screens\Accomodation\AccomodationListScreen;
use App\Orchid\Screens\Article\ArticleEditScreen;
use App\Orchid\Screens\Article\ArticleListScreen;
use App\Orchid\Screens\ArticleTag\ArticleTagEditScreen;
use App\Orchid\Screens\ArticleTag\ArticleTagListScreen;
use App\Orchid\Screens\Booking\BookingEditScreen;
use App\Orchid\Screens\Booking\BookingListScreen;
use App\Orchid\Screens\Contact\ContactEditScreen;
use App\Orchid\Screens\Contact\ContactListScreen;
use App\Orchid\Screens\Cso\CsoEditScreen;
use App\Orchid\Screens\Cso\CsoListScreen;
use App\Orchid\Screens\Event\EventEditScreen;
use App\Orchid\Screens\Event\EventListScreen;
use App\Orchid\Screens\EventRegistration\EventRegistrationListScreen;
use App\Orchid\Screens\ExpertProfile\ExpertProfileEditScreen;
use App\Orchid\Screens\ExpertProfile\ExpertProfileListScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

Route::screen('article/{article?}', ArticleEditScreen::class)
    ->name('platform.article.edit');

Route::screen('articles', ArticleListScreen::class)
    ->name('platform.article.list');

Route::screen('cso/{cso?}', CsoEditScreen::class)
    ->name('platform.cso.edit');

Route::screen('csos', CsoListScreen::class)
    ->name('platform.cso.list');
Route::screen('expert/{expert?}', ExpertProfileEditScreen::class)
    ->name('platform.expert.edit');

Route::screen('experts', ExpertProfileListScreen::class)
    ->name('platform.expert.list');

Route::screen('accomodation/{accomodation?}', AccomodationEditScreen::class)
    ->name('platform.accomodation.edit');

Route::screen('accomodations', AccomodationListScreen::class)
    ->name('platform.accomodation.list');

Route::screen('event/{event?}', EventEditScreen::class)
    ->name('platform.event.edit');

Route::screen('events', EventListScreen::class)
    ->name('platform.event.list');

Route::screen('contact/{contactInfo?}', ContactEditScreen::class)
    ->name('platform.contact.edit');

Route::screen('contacts', ContactListScreen::class)
    ->name('platform.contact.list');

Route::screen('event-registrations', EventRegistrationListScreen::class)
    ->name('platform.event-registration.list');

Route::screen('booking/{booking?}', BookingEditScreen::class)
    ->name('platform.booking.edit');

Route::screen('bookings', BookingListScreen::class)
    ->name('platform.booking.list');

Route::screen('articletag/{articleTag?}', ArticleTagEditScreen::class)
    ->name('platform.articletag.edit');

Route::screen('articletags', ArticleTagListScreen::class)
    ->name('platform.articletag.list');
