<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Binti",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt ratione suscipit ducimus beatae numquam, sit provident aut minus molestias cum dolores, modi quam error libero, tempore veniam repudiandae. Quaerat voluptatibus dignissimos est praesentium temporibus provident reprehenderit sunt tempore officia consequuntur vPoluptatum atque, in ducimus rerum quibusdam non obcaecati dolore ea necessitatibus repellendus facere sed magnam! Facere ratione ipsa earum ab facilis minima, fugiat expedita quia sapiente doloribus nemo suscipit officiis deleniti optio, porro blanditiis libero! Corrupti modi repudiandae exercitationem id!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kholifah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio labore aspernatur odit aut voluptatem aliquam nihil alias quos debitis molestiae natus cum corrupti architecto voluptatibus quisquam, quod sed dicta cumque minima voluptatum eum aliquid dolorum reprehenderit dolor. Illo animi saepe obcaecati, incidunt iure cumque! Corporis ex deleniti et magni aperiam obcaecati suscipit pariatur facere velit sint, voluptatum culpa debitis inventore rerum quasi ipsam. Vel dolor nihil dolores corrupti fugiat nisi praesentium. Reiciendis quo deserunt iusto veniam deleniti suscipit. Labore quo veniam natus voluptas. Ea, odio. Culpa blanditiis incidunt repudiandae ducimus magni, beatae ipsum voluptatibus eius ipsa quam, consequuntur nemo animi!"
        ]
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
