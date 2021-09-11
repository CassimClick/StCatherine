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

    public function retreat()
    {
        $data['title'] = 'retreat';
        return view('pages/retreat', $data);
    }
    public function slide()
    {
        $data['title'] = 'retreat';
        return view('pages/slide', $data);
    }
}