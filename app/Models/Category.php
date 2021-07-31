<?php

namespace App\Models;


use Illuminate\Support\Facades\File;

class Category
{
    public static $categories = [
        1 => [
            'id' => 1,
            'category' => 'SPORT',
            'name' => 'sport',
        ],
        2 => [
            'id' => 2,
            'category' => 'ART',
            'name' => 'art',
        ]
    ];

    public static function getCategories()
    {
//        return static::$categories;
        return json_decode(File::get(storage_path() . '/categories.json'), true);
    }

    public static function getCategoryIdByName($name)
    {
        $id = null;
        foreach (static::getCategories() as $category) {
            if ($name == $category['name']) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public static function getCategoryById($id)
    {
//        return static::$categories[$id];
        return json_decode(File::get(storage_path() . '/categories.json'), true)[$id];
    }
}
