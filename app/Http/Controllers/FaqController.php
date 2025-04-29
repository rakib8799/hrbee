<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        $pageTitle = 'FAQ';
        $data = [
            'pageTitle' => $pageTitle
        ];
        return view('faq.faq', $data);    
    }
}
