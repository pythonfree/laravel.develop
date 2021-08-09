<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        //$news = News::all();
        $news = News::query()
            ->where('isPrivate', false)
//            ->get();
            ->paginate(3);

        return view('news.index')->with('news', $news);
    }

    public function show($id)
    {
        $article = News::query()->find($id);
        if (!empty($article)) {
            return view('news.One')->with('article', $article);
        } else {
            return redirect()->route('news.index');
        }
    }
}
