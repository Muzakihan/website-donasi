<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicationController extends Controller
{
    public function event()
    {
        return view('pages.publication.event');
    }

    public function article()
    {
        $articles = Article::with('categoryArticle')->get();
        return view('pages.publication.article', compact('articles'));
    }

    public function laporanKeuangan()
    {
        return view('pages.publication.laporan-keuangan');
    }

    public function singleArticle($id)
    {
        $singleArticle = Article::with('categoryArticle')->findOrFail($id);
        $relatedArticles = Article::where('id', '!=', $id)->inRandomOrder()->limit(3)->get();
        return view('pages.publication.artikel-single', compact('singleArticle', 'relatedArticles'));
    }
    
}
    