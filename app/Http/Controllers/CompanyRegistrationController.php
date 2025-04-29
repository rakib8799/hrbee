<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRegistrationRequest;
use App\Services\RosterBee\CompanyRegistrationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyRegistrationController extends Controller
{
    protected CompanyRegistrationService $companyRegistrationService;

    public function __construct(CompanyRegistrationService $companyRegistrationService)
    {
        $this->companyRegistrationService = $companyRegistrationService;
    }

    public function create(Request $request)
    {
        $subscriptionPlanSlug = $request->query('subscription-plan-slug');
        $planType = $request->query('plan-type');
        $subscriptionPlans = $this->companyRegistrationService->getSubscriptionPlan();
        $validatedData = $this->companyRegistrationService->isSlugValidated($subscriptionPlans['subscriptionPlans'], $subscriptionPlanSlug, $planType);
        if ($validatedData) {
            if ($planType === 'monthly') {
                $subscriptionPlan = $subscriptionPlans['subscriptionPlanMonthly']; 
                // Store specific monthly subscription plan in cache for sitemap generation      
                cache()->put('monthly_subscription_plan', $subscriptionPlan[0]);
            } else if ($planType === 'yearly') {
                $subscriptionPlan = $subscriptionPlans['subscriptionPlanYearly'];
                // Store specific yearly subscription plan in cache for sitemap generation      
                cache()->put('yearly_subscription_plan', $subscriptionPlan[0]);
            }

            $responseData = [
                'id' => $validatedData['id'],
                'subscriptionPlanSlug' => $subscriptionPlanSlug,
                'subscriptionPlan' => $subscriptionPlan,
                'pageTitle' => 'Company Registration'
            ];
            return view('registration.company-register', $responseData);
        }
        return redirect()->route('home.index');
    }

    public function store(CreateCompanyRegistrationRequest $request)
    {
        $validatedData = $request->validated();
        $companyOnboarding = $this->companyRegistrationService->companyOnboarding($validatedData);
        session(['companyOnboarding' => $companyOnboarding]);
        return redirect()->route('company-register.confirm');
    }

    public function validateField(Request $request)
    {
        $rules = [
            'workspace' => ['required', 'regex:/^[A-Za-z0-9][A-Za-z0-9_]*$/', 'not_in:hrbee,admin,dev'],
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required'
        ];

        $field = $request->input('field');
        $value = $request->input('value');

        $validator = Validator::make([$field => $value], [$field => $rules[$field] ?? '']);

        return response()->json([
            'errors' => $validator->errors()->toArray()
        ]);
    }

    public function confirm()
    {
        if(session()->has('companyOnboarding')) {
            $companyOnboarding = session('companyOnboarding');
            session()->forget('companyOnboarding');

            return view('registration.confirmation', [
                'companyOnboarding' => $companyOnboarding,
                'pageTitle' => 'Registration Successful'
            ]);
        }
        return redirect()->route('home.index');
    }
}
