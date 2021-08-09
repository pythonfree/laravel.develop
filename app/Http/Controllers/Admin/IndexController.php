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
