<?php

namespace App\Models;


use Illuminate\Support\Facades\File;

class News
{
    public static $news = [
        1 => [
            'id' => 1,
            'title' => 'Article SPORT 1 (private)',
            'text' => 'This id a good article SPORT 1',
            'isPrivate' => true,
            'image' => null,
            'category_id' => 1
        ],
        2 => [
            'id' => 2,
            'title' => 'Article SPORT 2',
            'text' => 'This id a good article SPORT 2',
            'isPrivate' => false,
            'image' => null,
            'category_id' => 1
        ],
        3 => [
            'id' => 3,
            'title' => 'Article ART 1',
            'text' => 'This is a good article ART 1',
            'isPrivate' => false,
            'image' => null,
            'category_id' => 2
        ],
        4 => [
            'id' => 4,
            'title' => 'Article ART 2',
            'text' => 'This is a good article ART 2',
            'isPrivate' => false,
            'image' => null,
            'category_id' => 2
        ]
    ];

    public static function getNews()
    {
//        return static::$news;
        return json_decode(File::get(storage_path() . '/news.json'), true);
    }

    public static function getNewsId($id)
    {
//        return static::$news[$id];
        return json_decode(File::get(storage_path() . '/news.json'), true)[$id];
    }

    public static function getNewsByCategoryName($name)
    {
        $id = Category::getCategoryIdByName($name);

        $news = [];
        foreach (static::getNews() as $article) {
            if ($id == $article['category_id']) {
                $news[] = $article;
            }
        }
        return $news;
    }
}
