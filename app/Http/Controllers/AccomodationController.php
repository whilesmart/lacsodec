<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    public function index(Request $request)
    {
        $location = $request->query('location', 'all');
        $accomodationsQuery = Accomodation::with('attachment');
        if ($location != 'all') {
            $accomodationsQuery = $accomodationsQuery->where('city', $location);
        }
        $accomodations = $accomodationsQuery->paginate(20);

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
