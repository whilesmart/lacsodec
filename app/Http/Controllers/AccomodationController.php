<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;

class AccomodationController extends Controller
{
    public function index()
    {
        $accomodations = Accomodation::with('attachment')->paginate(20);

        return view('lodge', [
            'accomodations' => $accomodations,
        ]);
    }

    public function show($accomodation)
    {
        $accomodation = Accomodation::with('attachment')->findOrFail($accomodation);

        return view('lodge-details', [
            'accomodation' => $accomodation,
        ]);
    }
}
