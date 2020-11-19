<?php

namespace App\Http\Controllers;

use Orchestra\Parser\Xml\Facade as XmlParser;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index()
    {
        $load = XmlParser::load("https://news.yandex.ru/music.rss");
        dd($load);
    }
}
