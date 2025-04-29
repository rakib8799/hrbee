<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $pageTitle = 'About';
        $data = [
            'pageTitle' => $pageTitle
        ];
        return view('about.about', $data);    
    }
}
