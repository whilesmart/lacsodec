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
        return view('cso-directory', [
            'csos' => $csos,
            'cso_domains' => $cso_domains
        ]);
    }

    // I don't think this function is needed anymore
    public function indexDirectory()
    {
        $csos = Cso::paginate(20);
        return view('cso-directory', [
            'csos' => $csos,
        ]);
    }

    public function show($cso)
    {
        $cso = Cso::findOrFail($cso);
        $otherCsos = Cso::where('id', '!=', $cso->id)->limit(3)->get();
        $latestCsos = Cso::where('id', '!=', $cso->id)->orderBy('created_at', 'desc')->limit(4)->get();
        return view('cso-directory-details', [
            'cso' => $cso,
            'otherCsos' => $otherCsos,
            'latestCsos' => $latestCsos
        ]);
    }
}
