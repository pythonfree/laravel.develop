<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::select('SELECT * FROM news');
        //dd($news);
        return view('news.index')->with('news', $news);
    }

    public function show($id)
    {
        $article = DB::select('SELECT * FROM news WHERE id = :id', ['id' => $id]);
        //dd($article);
        if (!empty($article)) {
            return view('news.One')->with('article', $article[0]);
        } else {
            return redirect()->route('news.index');
        }
    }
}
