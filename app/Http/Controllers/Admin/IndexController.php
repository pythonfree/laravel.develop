<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->flash();
            return redirect()->route('admin.create');
        }
        //dump($request->old());
        return view('admin.create', [
            'categories' => Category::getCategories()
        ]);
        //return view('admin.create')->with('categories', Category::getCategories());
    }

    public function json()
    {
        return response()->json(News::getNews())
            ->header('Content-Disposition',
                'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function downloadImage()
    {
        return response()->download('elsa_1.gif');
    }
}
