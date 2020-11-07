<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $objNews = new News();
        $news = $objNews->getAllNews();
        return view('news.index', ['news' => $news]);
    }

    public function show(string $slug)
    {
        $objNews = new News();
        $news = $objNews->getNewsBySlug($slug);

        return view('news.show', ['news' => $news]);
    }
}
