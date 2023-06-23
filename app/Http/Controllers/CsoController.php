<?php

namespace App\Http\Controllers;

use App\Models\Cso;
use App\Models\CsoActivityDomain;
use Illuminate\Http\Request;

class CsoController extends Controller
{
    public function index()
    {
        $csos = Cso::paginate(20);
        $cso_domains = CsoActivityDomain::all();
        return view('cso-library', [
            'csos' => $csos,
            'cso_domains' => $cso_domains
        ]);
    }
}
