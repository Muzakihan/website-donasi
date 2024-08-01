<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicationController extends Controller
{
    public function event()
    {
        $articles = Article::with('categoryArticle')->get();
        return view('pages.publication.event', compact('articles'));
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

    public function singleEvent($id)
    {
        $singleEvent = Article::with('categoryArticle')->findOrFail($id);
        $relatedEvents = Article::where('id', '!=', $id)->inRandomOrder()->limit(3)->get();
        return view('pages.publication.event-single', compact('singleEvent', 'relatedEvents'));
    }
    
}
    