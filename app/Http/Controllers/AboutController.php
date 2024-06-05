<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function profile()
    {
        return view('pages.about.profile');
    }
    public function structure()
    {
        return view('pages.about.structure');
    }
    public function legalFormal()
    {
        return view('pages.about.legal-formal');
    }
}
