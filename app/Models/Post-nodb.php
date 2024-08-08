<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Trafglaw",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, omnis obcaecati? Obcaecati sequi, aperiam error ex quas deserunt odio voluptas, sit nemo quos libero porro commodi id doloribus repellendus possimus consectetur. Voluptatem, nemo doloribus nulla expedita ipsam nihil ab temporibus quasi vel atque, accusantium ex. Itaque corporis dicta asperiores? Cumque beatae corporis non ea. Quis, accusantium suscipit sed placeat dolore eligendi repellat minus quisquam similique, illo cum beatae eaque laboriosam maxime fugiat. Totam assumenda vero dolores, doloribus ex eum consectetur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Trafglaw",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, omnis obcaecati? Obcaecati sequi, aperiam error ex quas deserunt odio voluptas, sit nemo quos libero porro commodi id doloribus repellendus possimus consectetur. Voluptatem, nemo doloribus nulla expedita ipsam nihil ab temporibus quasi vel atque, accusantium ex. Itaque corporis dicta asperiores? Cumque beatae corporis non ea. Quis, accusantium suscipit sed placeat dolore eligendi repellat minus quisquam similique, illo cum beatae eaque laboriosam maxime fugiat. Totam assumenda vero dolores, doloribus ex eum consectetur."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
