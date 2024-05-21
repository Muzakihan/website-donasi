<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function event()
    {
        return view('pages.publication.event');
    }
    public function article()
    {
        return view('pages.publication.article');
    }
    public function laporanKeuangan()
    {
        return view('pages.publication.laporan-keuangan');
    }
    public function singleArticle()
    {
        return view('pages.publication.artikel-single');
    }
}
