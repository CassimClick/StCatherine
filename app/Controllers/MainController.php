<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function __construct()
    {
        helper(['gallery']);
    }

    //=================home page====================
    public function index()
    {
        $data['title'] = 'Home';
        return view('pages/homePage', $data);
    }
    //=================about us page====================

    public function about()
    {
        $data['title'] = 'About Us';
        return view('pages/about', $data);
    }

    //=================contact us page====================
    public function contact()
    {
        $data['title'] = 'Contact Us';
        return view('pages/contact', $data);
    }

    //=================retreat house page====================
    public function retreat()
    {
        $data['title'] = 'retreat';
        return view('pages/retreat', $data);
    }
    //=================gallery page====================
    public function gallery()
    {
        $data['title'] = 'Our Gallery';
        return view('pages/ourGallery', $data);
    }
    //=================rooms page====================
    public function rooms()
    {
        $data['title'] = 'Our Rooms';
        return view('pages/ourRooms', $data);
    }
    //=================camp site page====================
    public function campSite()
    {
        $data['title'] = 'Camp Site';
        return view('pages/campSite', $data);
    }
    //=================iraqw cultural====================
    public function cultural()
    {
        $data['title'] = 'Iraqw cultural Museum';
        return view('pages/cultural', $data);
    }
}