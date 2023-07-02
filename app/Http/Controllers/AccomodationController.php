<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    public function index()
    {
        $accomodations = Accomodation::with('attachment')->paginate(20);
        return view('lodge', [
            'accomodations' => $accomodations
        ]);
    }
}
