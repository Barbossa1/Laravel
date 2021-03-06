<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(3);
        return view('news.index', ['news' => $news]);
    }

    public function show(string $slug)
    {
       $news = News::where('slug', $slug)->first();

        return view('news.show', ['news' => $news]);
    }
}
