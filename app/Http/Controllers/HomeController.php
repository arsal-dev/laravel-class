<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel'];
        return view('home', ['data' => $languages]);
    }

    public function contact()
    {
        return view('contact');
    }
}
