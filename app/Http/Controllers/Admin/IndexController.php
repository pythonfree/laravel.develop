<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
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
            dd($request);
        }
        return view('admin.create', [
            'categories' => Category::getCategories()
        ]);
    }

    public function test2()
    {
        return view('admin.test2');
    }
}
