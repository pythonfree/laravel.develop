<?php

namespace App\Models;


class Category
{
    private static $categories = [
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
        return static::$categories;
    }

    public static function getCategoryIdByName($name)
    {
        $id = null;
        foreach (static::$categories as $category) {
            if ($name == $category['name']) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public static function getCategoryById($id)
    {
        return static::$categories[$id];
    }
}
