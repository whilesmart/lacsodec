<?php

namespace App\Http\Controllers;

use App\Models\Cso;
use App\Models\CsoActivityDomain;
use App\Models\CsoDomain;
use App\Services\CountryService;
use Illuminate\Http\Request;

class CsoController extends Controller
{
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    public function index(Request $request)
    {
        $domain = $request->query('domain');
        $csosQuery = Cso::where('status', 'verified');
        if ($domain) {
            $csosQuery = $csosQuery->where('domain', $domain);
        }
        $csos = $csosQuery->paginate(20);
        $cso_domains = CsoActivityDomain::orderBy('name', 'asc')->get();

        foreach ($cso_domains as $item) {
            $csoNumber = Cso::where('status', 'verified')->where('domain', $item->name)->count();
            $item->csoNumber = $csoNumber;
        }

        return view('cso-directory', [
            'csos' => $csos,
            'cso_domains' => $cso_domains,
        ]);
    }

    public function show($cso)
    {
        $cso = Cso::findOrFail($cso);
        $otherCsos = Cso::where('id', '!=', $cso->id)->where('status', 'verified')->limit(3)->get();
        $latestCsos = Cso::where('id', '!=', $cso->id)->where('status', 'verified')->orderBy('created_at', 'desc')->limit(4)->get();

        return view('cso-directory-details', [
            'cso' => $cso,
            'otherCsos' => $otherCsos,
            'latestCsos' => $latestCsos,
        ]);
    }

    public function create(Request $request)
    {
        $domains = CsoActivityDomain::orderBy('name', 'asc')->get();
        $countries = $this->countryService->getAllCountries();

        return view('register-cso', [
            'domains' => $domains,
            'countries' => $countries,
        ]);
    }

    public function store(Request $request)
    {
        $otherDomains = $request->other_domains ?? [];
        $fields = $request->validate([
            'name' => ['required', 'string'],
            'partnership' => ['required', 'string'],
            'registration_year' => ['required', 'integer'],
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
            'office' => ['required', 'string'],
            'african_coverage' => ['required', 'string'],
            'organization_leaderships' => ['required', 'string'],
            'background' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
        ]);

        $image_path = $request->file('image')->store();

        $cso = Cso::create([
            'name' => $fields['name'],
            'partnership' => $fields['partnership'],
            'registration_year' => $fields['registration_year'],
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
            'office' => ($fields['office'] == 'true') ? true : false,
            'african_coverage' => $fields['african_coverage'],
            'organization_leaderships' => $fields['organization_leaderships'],
            'background' => $fields['background'],
            'image' => '/storage/'.$image_path,
            'user_id' => $request->user()->id,
            'created_by' => $request->user()->id,
            'status' => 'not verified',
            'assessment_score' => 'Not Assessed',
        ]);

        foreach ($otherDomains as $item) {
            CsoDomain::create([
                'cso_id' => $cso->id,
                'name' => $item,
            ]);
        }

        return redirect()->to('/cso-directory')->with('success', 'Cso registered successfully. It will be made public after approval by admins');
    }

    public function userCsos(Request $request)
    {
        $csos = $request->user()->created_csos()->paginate(20);

        return view('my-csos', [
            'csos' => $csos,
        ]);
    }

    public function delete(Request $request, $cso)
    {
        $cso = Cso::findOrFail($cso);
        $cso->delete();

        return redirect()->back()->with('success', 'cso successfully deleted');
    }
}
