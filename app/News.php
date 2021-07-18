<?php

namespace App;


class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'title' => 'First article 1',
            'text' => 'This id a good article 1'
        ],
        2 => [
            'id' => 2,
            'title' => 'Second article 2',
            'text' => 'This is a good article 2'
        ]
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        foreach (static::$news as $article) {
            if ($id == $article['id']) {
                return $article;
            }
        }
    }
}