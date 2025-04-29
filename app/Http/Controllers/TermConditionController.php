<?php

namespace App\Http\Controllers;

class TermConditionController extends Controller
{
    public function index()
    {
        $pageTitle = 'Terms and Conditions';
        $data = [
            'pageTitle' => $pageTitle
        ];
        return view('term-condition.term-condition', $data);    
    }
}
