<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.service');
    }
    public function rekeningDonasi()
    {
        return view('pages.service.rekening-donasi');
    }
    public function kantorLayanan()
    {
        return view('pages.service.kantor-layanan');
    }
    public function jemputLayanan()
    {
        return view('pages.service.jemput-layanan');
    }
}
