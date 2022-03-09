<?php

namespace App\Models;



class Post 
{
 
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iyus Yusa",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis libero odit porro aliquid blanditiis eaque corrupti illo animi saepe alias maiores similique temporibus esse reprehenderit illum veritatis, necessitatibus nihil facere? Libero atque voluptatibus eos sequi dolores cumque! Exercitationem est obcaecati excepturi eos quis voluptatem laudantium, perspiciatis deserunt eveniet provident id?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yayat Hidayat",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab excepturi nemo ut inventore eaque officia natus illum dignissimos. Neque totam ipsam labore repellendus dolore, rerum veniam nemo reprehenderit cum placeat delectus provident perferendis quod fuga enim omnis dolorum, aliquam tempora illum. Accusantium ab veniam corporis, obcaecati, delectus itaque nulla sunt tempore cum, est consequuntur laborum distinctio reiciendis quam adipisci nisi? Architecto labore illum pariatur magnam maxime deleniti consectetur! Iusto reiciendis delectus eius alias porro hic quibusdam debitis at rerum, dolore nobis sequi dolorem odio deleniti, quasi est perferendis! Sequi ratione dicta quis reiciendis repudiandae enim facere vel eum perferendis nulla?"
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
