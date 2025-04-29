<?php

namespace App\Http\Controllers;

class VideoTutorialController extends Controller
{
    public function index()
    {
        $pageTitle = 'Video Tutorial';
        $data = [
            'pageTitle' => $pageTitle
        ];
        return view('tutorial.video-tutorial', $data);    
    }
}
