<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Author::create([
            'name' => 'Daffa Muhamad Azhar',
            'email' => 'daffa.azhar0037@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Author::create([
            'name' => 'Muhammad Raihan',
            'email' => 'tu.hantu@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Article::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'author_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rem illo atque eveniet eum qui asperiores iusto hic explicabo, ullam harum aliquam deserunt tempora repudiandae ducimus odio provident. Et perspiciatis voluptas dolorum ratione! Velit accusantium temporibus repellat corrupti! Culpa dolorum, corrupti omnis sint expedita provident quo ipsa, cum, adipisci quaerat quod officia amet? Minima aliquam voluptates dolor, maxime odio sequi numquam? Autem sed reprehenderit dolor illum. Quam distinctio odit nihil voluptas animi harum perferendis doloremque illo aliquam ipsa id eveniet temporibus beatae, porro molestias inventore recusandae ea nulla voluptatum magni eaque sequi! Aliquam quos consequuntur soluta est, quod nulla laudantium?'
        ]);

        Article::create([
            'title' => 'Judul Kedua',
            'category_id' => 1,
            'author_id' => 1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rem illo atque eveniet eum qui asperiores iusto hic explicabo, ullam harum aliquam deserunt tempora repudiandae ducimus odio provident. Et perspiciatis voluptas dolorum ratione! Velit accusantium temporibus repellat corrupti! Culpa dolorum, corrupti omnis sint expedita provident quo ipsa, cum, adipisci quaerat quod officia amet? Minima aliquam voluptates dolor, maxime odio sequi numquam? Autem sed reprehenderit dolor illum. Quam distinctio odit nihil voluptas animi harum perferendis doloremque illo aliquam ipsa id eveniet temporibus beatae, porro molestias inventore recusandae ea nulla voluptatum magni eaque sequi! Aliquam quos consequuntur soluta est, quod nulla laudantium?'
        ]);

        Article::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2,
            'author_id' => 1,
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rem illo atque eveniet eum qui asperiores iusto hic explicabo, ullam harum aliquam deserunt tempora repudiandae ducimus odio provident. Et perspiciatis voluptas dolorum ratione! Velit accusantium temporibus repellat corrupti! Culpa dolorum, corrupti omnis sint expedita provident quo ipsa, cum, adipisci quaerat quod officia amet? Minima aliquam voluptates dolor, maxime odio sequi numquam? Autem sed reprehenderit dolor illum. Quam distinctio odit nihil voluptas animi harum perferendis doloremque illo aliquam ipsa id eveniet temporibus beatae, porro molestias inventore recusandae ea nulla voluptatum magni eaque sequi! Aliquam quos consequuntur soluta est, quod nulla laudantium?'
        ]);

        Article::create([
            'title' => 'Judul Keempat',
            'category_id' => 2,
            'author_id' => 2,
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas rem illo atque eveniet eum qui asperiores iusto hic explicabo, ullam harum aliquam deserunt tempora repudiandae ducimus odio provident. Et perspiciatis voluptas dolorum ratione! Velit accusantium temporibus repellat corrupti! Culpa dolorum, corrupti omnis sint expedita provident quo ipsa, cum, adipisci quaerat quod officia amet? Minima aliquam voluptates dolor, maxime odio sequi numquam? Autem sed reprehenderit dolor illum. Quam distinctio odit nihil voluptas animi harum perferendis doloremque illo aliquam ipsa id eveniet temporibus beatae, porro molestias inventore recusandae ea nulla voluptatum magni eaque sequi! Aliquam quos consequuntur soluta est, quod nulla laudantium?'
        ]);
    }
}
