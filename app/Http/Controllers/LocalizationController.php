<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function changeLang(Request $request, $locale)
    {
        if (! in_array($locale, ['en', 'fr'])) {
            abort(400);
        }

        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
