<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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


            $data[] = [
                'title' => $request->title,
                //'category_id' => $request->category,
                'text' => $request->text,
                'image' => $url,
                'isPrivate' => isset($request->isPrivate)
            ];
            DB::table('news')->insert($data);


            return redirect()->route('admin.index')->with('success',
                'Новость успешно добавлена!');
        }

        return view('admin.create', [
            'categories' => []
        ]);
    }

    public function json()
    {
        return response()->json([])
            ->header('Content-Disposition',
                'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    public function downloadImage()
    {
        return response()->download('elsa_1.gif');
    }
}
