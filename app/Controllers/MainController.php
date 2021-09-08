<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        return view('pages/homePage', $data);
    }

    public function about()
    {
        $data['title'] = 'About Us';
        return view('pages/about', $data);
    }
}