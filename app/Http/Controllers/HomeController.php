<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $donates = Donate::with('categorydonate')->get();

        return view('pages.home', [
            'donates' => $donates
        ]);
    }
}
