<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
            //     'name'=>'Iyus Yusa',
            //     'email'=>'iyusyusa880@gmail.com',
            //     'password'=>bcrypt('12345')
            // ]);
            
            // User::create([
                //     'name'=>'Yayat Hidayat',
                //     'email'=>'yayathidayat@gmail.com',
                //     'password'=>bcrypt('12345')
                // ]);
                
         User::factory(3)->create();
                
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime',
        //     'body'=>'<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime, quam laborum est quod atque eius beatae explicabo provident,</p> <p>ipsam autem voluptate nemo? Quod expedita et magnam ducimus mollitia nisi delectus debitis, voluptatum architecto accusantium deserunt. Aut dolorum tempore fuga sunt unde, odit vel in! Dicta odit laudantium, assumenda voluptatem commodi excepturi iste consequuntur repellat provident ab, maxime asperiores neque ipsam eos. Velit voluptatem enim facilis, molestias aperiam minima vel similique repellendus nostrum molestiae voluptates quaerat natus ab culpa.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-ke-dua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime',
        //     'body'=>'<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime, quam laborum est quod atque eius beatae explicabo provident,</p> <p>ipsam autem voluptate nemo? Quod expedita et magnam ducimus mollitia nisi delectus debitis, voluptatum architecto accusantium deserunt. Aut dolorum tempore fuga sunt unde, odit vel in! Dicta odit laudantium, assumenda voluptatem commodi excepturi iste consequuntur repellat provident ab, maxime asperiores neque ipsam eos. Velit voluptatem enim facilis, molestias aperiam minima vel similique repellendus nostrum molestiae voluptates quaerat natus ab culpa.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Tiga',
        //     'slug'=>'judul-ke-tiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime',
        //     'body'=>'<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime, quam laborum est quod atque eius beatae explicabo provident,</p> <p>ipsam autem voluptate nemo? Quod expedita et magnam ducimus mollitia nisi delectus debitis, voluptatum architecto accusantium deserunt. Aut dolorum tempore fuga sunt unde, odit vel in! Dicta odit laudantium, assumenda voluptatem commodi excepturi iste consequuntur repellat provident ab, maxime asperiores neque ipsam eos. Velit voluptatem enim facilis, molestias aperiam minima vel similique repellendus nostrum molestiae voluptates quaerat natus ab culpa.</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);

        // Post::create([
        //     'title'=>'Judul Empat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime',
        //     'body'=>'<p> ipsum dolor sit amet consectetur adipisicing elit. Voluptates iusto maxime, quam laborum est quod atque eius beatae explicabo provident,</p> <p>ipsam autem voluptate nemo? Quod expedita et magnam ducimus mollitia nisi delectus debitis, voluptatum architecto accusantium deserunt. Aut dolorum tempore fuga sunt unde, odit vel in! Dicta odit laudantium, assumenda voluptatem commodi excepturi iste consequuntur repellat provident ab, maxime asperiores neque ipsam eos. Velit voluptatem enim facilis, molestias aperiam minima vel similique repellendus nostrum molestiae voluptates quaerat natus ab culpa.</p>',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
    }
}
