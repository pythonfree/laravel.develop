<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index')->with('news', News::getNews());
    }

    public function show($id)
    {
//        return view('newsOne', ['id' => $id]);
        if (array_key_exists($id, News::getNews())) {
            return view('news.One')->with('article', News::getNewsId($id));
        } else {
            return redirect()->route('news.index');
        }
    }
}
