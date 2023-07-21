<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\CountryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    public function create()
    {
        $countries = $this->countryService->getAllCountries();

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
