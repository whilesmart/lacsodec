<?php

namespace App\Http\Controllers;

use App\Models\Cso;
use App\Models\CsoActivityDomain;
use Illuminate\Http\Request;

class CsoController extends Controller
{
    public function index()
    {
        $csos = Cso::where('status', 'approved')->paginate(20);
        $cso_domains = CsoActivityDomain::all();

        return view('cso-directory', [
            'csos' => $csos,
            'cso_domains' => $cso_domains,
        ]);
    }

    // I don't think this function is needed anymore
    public function indexDirectory()
    {
        $csos = Cso::where('status', 'approved')->paginate(20);

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
            'latestCsos' => $latestCsos,
        ]);
    }

    public function create(Request $request)
    {
        $domains = CsoActivityDomain::all();

        return view('register-cso', [
            'domains' => $domains,
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'string'],
            'assessment_score' => ['integer', 'required'],
            'partnership' => ['required', 'string'],
            'registration_date' => ['required', 'string'],
            'organization_type' => ['required', 'string'],
            'registration_number' => ['required', 'string'],
            'country' => ['required', 'string'],
            'region' => ['required', 'string'],
            'division' => ['required', 'string'],
            'sub_division' => ['required', 'string'],
            'village' => ['required', 'string'],
            'contact_person_name' => ['required', 'string'],
            'contact_person_sex' => ['required', 'string'],
            'contact_person_email' => ['required', 'string'],
            'contact_person_tel' => ['required', 'string'],
            'contact_person_position' => ['required', 'string'],
            'address' => ['required', 'string'],
            'website' => ['required', 'string'],
            'email' => ['required', 'email'],
            'tel' => ['required', 'string'],
            'vision_statement' => ['required', 'string'],
            'primary_target_beneficiaries' => ['required', 'string'],
            'domain' => ['required', 'string'],
            'board_directors' => ['required', 'string'],
            'african_coverage' => ['required', 'string'],
            'organization_leaderships' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
        ]);

        $image_path = $request->file('image')->store();

        $cso = Cso::create([
            'name' => $fields['name'],
            'assessment_score' => $fields['assessment_score'],
            'partnership' => $fields['partnership'],
            'registration_date' => $fields['registration_date'],
            'organization_type' => $fields['organization_type'],
            'registration_number' => $fields['registration_number'],
            'country' => $fields['country'],
            'region' => $fields['region'],
            'division' => $fields['division'],
            'sub_division' => $fields['sub_division'],
            'village' => $fields['village'],
            'contact_person_name' => $fields['contact_person_name'],
            'contact_person_sex' => $fields['contact_person_sex'],
            'contact_person_email' => $fields['contact_person_email'],
            'contact_person_tel' => $fields['contact_person_tel'],
            'contact_person_position' => $fields['contact_person_position'],
            'address' => $fields['address'],
            'website' => $fields['website'],
            'email' => $fields['email'],
            'tel' => $fields['tel'],
            'vision_statement' => $fields['vision_statement'],
            'primary_target_beneficiaries' => $fields['primary_target_beneficiaries'],
            'domain' => $fields['domain'],
            'board_directors' => ($fields['board_directors'] == 'true') ? true : false,
            'african_coverage' => $fields['african_coverage'],
            'organization_leaderships' => $fields['organization_leaderships'],
            'image' => '/storage/'.$image_path,
            'user_id' => $request->user()->id,
            'created_by' => $request->user()->id,
        ]);

        return redirect()->to('/cso-directory')->with('success', 'Cso registered successfully. It will be made public after approval by admins');
    }
}
