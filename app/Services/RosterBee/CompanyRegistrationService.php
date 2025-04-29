<?php

namespace App\Services\RosterBee;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Throwable;

class CompanyRegistrationService extends RosterBeeBaseService
{
    private mixed $centralAdminAPIUrl;
    private mixed $data;
    private mixed $url;
    private mixed $method;

    public function __construct()
    {
        $this->centralAdminAPIUrl = env('CENTRAL_ADMIN_API_URL');
        $this->data = null;
        $this->url = null;
        $this->method = null;
    }

    public function sendRequest(): Response
    {
        $data = $this->data;
        $header = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-Api-Key' => env('CENTRAL_ADMIN_API_KEY'),
        ];

        $url = $this->centralAdminAPIUrl . $this->url;
        
        if ($this->method === 'POST') {
            $response = Http::withHeaders($header)->post($url, $data);
        } else {
            $response = Http::withHeaders($header)->get($url, $data);
        }
        return $response;
    }

    public function companyOnboarding($data)
    {
        $this->data = $data;
        $this->url = '/api/v1/central-admin/company/onboarding';
        $this->method = 'POST';
        $response = $this->sendRequest();
        
        if ($response->getStatusCode() === 200) {
            return [
                'success' => true,
                'message' => 'Registration completed successfully. <br> Please check your email to activate your account.',    
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Oops! Something went wrong.',    
            ];
        }
    }

    public function getSubscriptionPlan()
    {
        try{
            $this->url = '/api/v1/central-admin/subscription-plans';
            $this->method = 'GET';
            $response = $this->sendRequest();
            $subscriptionPlansData = json_decode($response->getBody()->getContents(), true);
            $subscriptionPlans = $subscriptionPlansData['subscriptionPlans'];
            $subscriptionPlanFeatures = $subscriptionPlansData['subscriptionPlanFeatures'];
            $subscriptionPlanMonthly = [];
            $subscriptionPlanYearly = [];

            foreach ($subscriptionPlans as $plan) {
                if ($plan['plan_type'] === 'monthly') {
                    $subscriptionPlanMonthly[] = $plan;
                } else if($plan['plan_type'] === 'yearly') {
                    $subscriptionPlanYearly[] = $plan;
                }
            }
            
            return [
                'subscriptionPlans' => $subscriptionPlans,
                'subscriptionPlanMonthly' => $subscriptionPlanMonthly,
                'subscriptionPlanYearly' => $subscriptionPlanYearly,
                'subscriptionPlanFeatures' => $subscriptionPlanFeatures
            ];
        } catch(Throwable $e) {
            return [
                'subscriptionPlans' => [],
                'subscriptionPlanMonthly' => [],
                'subscriptionPlanYearly' => [],
                'subscriptionPlanFeatures' => []
            ];
        }
    }

    public function isSlugValidated($subscriptionPlans, $subscriptionPlanSlug, $planType)
    {
        foreach ($subscriptionPlans as $plan) {
            if ($plan['slug'] === $subscriptionPlanSlug && $plan['plan_type'] === $planType) {
                return [
                    'id' => $plan['id']
                ];
            }
        }
        return false;
    }
}