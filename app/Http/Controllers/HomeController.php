<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donates = Donate::where('status', 'pending')->with('categorydonate')->get();

        return view('pages.home', [
            'donates' => $donates
        ]);
    }
}
