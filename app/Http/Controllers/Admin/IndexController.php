<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            //$request->flash();


            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public/images', $request->file('image'));
                $url = Storage::url($path);
            }

            $data = News::getNews();

            $data[] = [
                'title' => $request->title,
                'category_id' => $request->category,
                'text' => $request->text,
                'image' => $url,
                'isPrivate' => isset($request->isPrivate)
            ];
            $id = array_key_last($data);
            $data[$id]['id'] = $id;

            File::put(storage_path() . '/news.json', json_encode($data,
                JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK));

            return redirect()->route('admin.index')->with('success',
                'Новость успешно добавлена!');
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
