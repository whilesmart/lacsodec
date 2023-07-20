<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        $countries = Country::all();

        return view('auth.register', [
            'countries' => $countries,
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'first-name' => ['required', 'string'],
            'last-name' => ['required', 'string'],
            'country' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $fields['first-name'].' '.$fields['last-name'],
            'country' => $fields['country'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        Auth::login($user);

        return redirect()->intended('/')->with('success', 'Account successfully registered');
    }
}
