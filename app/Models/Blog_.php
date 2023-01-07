<?php

namespace App\Models;

class Blog 
{

    public static $blog = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kevin Almer",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, quo! Atque culpa nemo ipsum impedit, odit perferendis neque nihil quidem deserunt asperiores harum architecto quis, in nostrum distinctio voluptatem consequuntur quo, repudiandae ex cumque excepturi! Quas beatae ipsa quidem iste deserunt et, vel, sed assumenda aspernatur perferendis sapiente est provident eaque cum? Saepe ipsam, voluptate tempora facilis dolor quibusdam et quisquam commodi at dolore veritatis beatae pariatur unde aliquid aperiam. At nesciunt in eius aut optio maxime quos soluta alias!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kerin Dwi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, quo! Atque culpa nemo ipsum impedit, odit perferendis neque nihil quidem deserunt asperiores harum architecto quis, in nostrum distinctio voluptatem consequuntur quo, repudiandae ex cumque excepturi! Quas beatae ipsa quidem iste deserunt et, vel, sed assumenda aspernatur perferendis sapiente est provident eaque cum? Saepe ipsam, voluptate tempora facilis dolor quibusdam et quisquam commodi at dolore veritatis beatae pariatur unde aliquid aperiam. At nesciunt in eius aut optio maxime quos soluta alias!"
        ]
    ];

    public static function all(){
        return collect(self::$blog);
    }

    public static function find($slug){
        $blog_posts = static::all();
        return $blog_posts->firstWhere('slug',$slug);
    }

}