<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB, Storage;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::query()
            ->paginate(5);
        //dd($news);
        //return view('admin.index')->with('news', $news);
        return view('admin.index', ['news' => $news]);
    }

    public function edit(Request $request, News $news)
    {
        return view('admin.create', [
            'news' => $news,
            'categories' => []
        ]);
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость успешно  удалена!');
    }

    public function update(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public/images', $request->file('image'));
                $url = Storage::url($path);
                $news->image = $url;
            }
            $news->fill($request->all());
            $news->save();
            return redirect()->route('admin.index')->with('success', 'Новость успешно изменена!');
        }
    }

    public function create(Request $request)
    {
        $news = new News();

        if ($request->isMethod('post')) {
            //$request->flash();


            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public/images', $request->file('image'));
                $url = Storage::url($path);
            }


            $news->fill($request->all())->save();

            return redirect()->route('admin.index')->with('success',
                'Новость успешно добавлена!');
        }

        return view('admin.create', [
            'categories' => [],
            'news' => $news
        ]);
    }

}
