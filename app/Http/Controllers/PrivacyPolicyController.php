<?php

namespace App\Http\Controllers;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $pageTitle = 'Privacy Policy';
        $data = [
            'pageTitle' => $pageTitle
        ];
        return view('privacy-policy.privacy-policy', $data);    
    }
}
