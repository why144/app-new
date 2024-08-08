<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Wahyudi",
        "email" => "wahyudi140319@gmail.com",
        "img" => "image.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}',function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] == $slug) {
            $new_post = $post;
        }
    };
    return view('post', [
        "title" => "Singel Post",
        "post" => $new_post
    ]);
});