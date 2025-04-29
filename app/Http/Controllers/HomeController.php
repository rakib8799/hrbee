<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\RosterBee\CompanyRegistrationService;

class HomeController extends Controller
{
    protected CompanyRegistrationService $companyRegistrationService;

    public function __construct(CompanyRegistrationService $companyRegistrationService)
    {
        $this->companyRegistrationService = $companyRegistrationService;
    }
    
    public function index()
    {
        $pageTitle = 'Attendance Report | Leave Management | Organizational Notification';
        $content = 'This is a dynamic HTML file.';
        $subscriptionPlans = $this->companyRegistrationService->getSubscriptionPlan();
        $data = [
            'pageTitle' => $pageTitle,
            'content' => $content,
            'subscriptionPlans' => $subscriptionPlans
        ];
        // return Inertia::render('Home/HomePage', $data);
        return view('home.home', $data);    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Event $event)
    {
        return Inertia::render('Event/Show', [
            'event' => $event->only(
                'id',
                'title',
                'start_date',
                'description'
            ),
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }


}
