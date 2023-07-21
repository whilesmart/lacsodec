<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\Booking;
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

    public function book(Request $request, $accomodation)
    {
        $accomodation = Accomodation::findOrFail($accomodation);
        if (! $accomodation->available) {
            return redirect()->back()->with('error', 'This lodge is not available for booking for the moment');
        }
        $fields = $request->validate([
            'name' => ['string', 'required'],
            'arrival' => ['string', 'required'],
            'departure' => ['string', 'required'],
            'email' => ['email', 'nullable'],
            'phone' => ['string', 'required'],
            'cause' => ['string', 'nullable'],
        ]);
        $overlapArrivalBookings = Booking::where('accomodation_id', $accomodation->id)->where('arrival', '<=', $fields['arrival'])->where('departure', '>=', $fields['arrival'])->count();
        $overlapDepartureBookings = Booking::where('accomodation_id', $accomodation->id)->where('arrival', '<=', $fields['departure'])->where('departure', '>=', $fields['departure'])->count();
        if ($overlapArrivalBookings > 0 || $overlapDepartureBookings > 0) {
            return redirect()->back()->with('error', 'This lodge will be occupied during this period');
        }
        $booking = Booking::create([
            'name' => $fields['name'],
            'arrival' => $fields['arrival'],
            'departure' => $fields['departure'],
            'email' => $fields['email'] ?? null,
            'phone' => $fields['phone'],
            'accomodation_id' => $accomodation->id,
            'cause' => $fields['cause'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Thanks for booking. You will receive a mail confirmation');
    }
}
