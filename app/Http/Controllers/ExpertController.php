<?php

namespace App\Http\Controllers;

use App\Models\Cso;
use App\Models\ExpertLanguage;
use App\Models\ExpertProfile;
use App\Services\CountryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExpertController extends Controller
{
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }

    public function index()
    {
        $experts = ExpertProfile::with('user')->where('status', 'approved')->paginate(20);

        return view('expert-directory', [
            'experts' => $experts,
        ]);
    }

    public function show($expert)
    {
        $expert = ExpertProfile::with(['user', 'languages'])->findOrFail($expert);
        $otherExperts = ExpertProfile::with('user')->where('id', '!=', $expert->id)->where('status', 'approved')->limit(4)->get();
        $otherCsos = Cso::where('status', 'verified')->limit(3)->get();
        $latestCsos = Cso::where('status', 'verified')->orderBy('created_at', 'desc')->limit(4)->get();

        return view('expert-directory-details', [
            'expert' => $expert,
            'otherExperts' => $otherExperts,
            'otherCsos' => $otherCsos,
            'latestCsos' => $latestCsos,
        ]);
    }

    public function create(Request $request)
    {
        $countries = $this->countryService->getAllCountries();

        return view('register-expert-profile', [
            'countries' => $countries,
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        if (ExpertProfile::where('user_id', $user->id)->count() > 0) {
            return redirect()->back()->with('error', 'You have already submitted your details to become an expert. Please wait for the administrators to approve');
        }
        $fields = $request->validate([
            'location' => ['required', 'string'],
            'details' => ['required', 'string'],
            'birthday' => ['required', 'string'],
            'sex' => ['required', 'string'],
            'birth_place' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'languages' => ['required', 'array'],
            'nationality' => ['required', 'string'],
            'company' => ['required', 'string'],
            'work_duration' => ['required', 'string'],
            'certification' => ['required', 'string'],
            'certification_date' => ['required', 'string'],
            'position' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
            'certification_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
            'isHumanResource' => ['required', 'string'],
        ]);

        $image_path = $request->file('image')->store();
        $certification_image_path = $request->file('certification_image')->store();

        $expert = ExpertProfile::create([
            'user_id' => $user->id,
            'location' => $fields['location'],
            'details' => $fields['details'],
            'birthday' => $fields['birthday'],
            'sex' => $fields['sex'],
            'status' => 'pending',
            'birth_place' => $fields['birth_place'],
            'nationality' => $fields['nationality'],
            'company' => $fields['company'],
            'work_duration' => $fields['work_duration'],
            'certification' => $fields['certification'],
            'certification_date' => $fields['certification_date'],
            'position' => $fields['position'],
            'phone_number' => $fields['phone_number'],
            'image' => '/storage/'.$image_path,
            'certification_image' => '/storage/'.$certification_image_path,
            'isHumanResource' => ($fields['isHumanResource'] == 'true') ? true : false,
        ]);

        foreach ($fields['languages'] as $item) {
            ExpertLanguage::create([
                'expert_id' => $expert->id,
                'name' => $item,
            ]);
        }

        return redirect()->to('/expert-directory')->with('success', 'you have successfuly submited your registration. Please wait for admin approval');
    }

    public function sendMail(Request $request, $expert)
    {
        $expert = ExpertProfile::findOrFail($expert);
        $fields = $request->validate([
            'name' => ['string', 'required'],
            'phone' => ['string', 'required'],
            'email' => ['email', 'required'],
            'message' => ['string', 'required'],
            'subject' => ['string', 'required'],
        ]);

        Mail::send(
            'mail.mail',
            [
                'name' => $fields['name'],
                'email' => $fields['email'],
                'phone' => $fields['phone'],
                'subject' => $fields['subject'],
                'comment' => $fields['message'],
            ],
            function ($message) use ($fields, $expert) {
                $message->from($fields['email'], $fields['name']);
                $message->to($expert->user->email, $expert->user->name)
                    ->subject($fields['subject']);
            }
        );

        return back()->with('success', 'Your email has been successfully sent');
    }
}
