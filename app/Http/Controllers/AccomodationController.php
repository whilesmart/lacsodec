<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    public function index(Request $request)
    {
        $location = $request->query('location', 'all');
        $equipmentNames = $request->query('equipment_names', []);
        $accomodationsQuery = Accomodation::with(['attachment', 'equipment']);
        if ($location != 'all') {
            $accomodationsQuery = $accomodationsQuery->where('city', $location);
        }
        if (count($equipmentNames) > 0) {
            $accomodationsQuery = $accomodationsQuery->whereHas('equipment', function ($query) use ($equipmentNames) {
                $query->whereIn('name', $equipmentNames);
            });
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
