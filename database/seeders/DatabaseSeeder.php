<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        \App\Models\ArticleCategory::factory(2)->create();
        \App\Models\ArticleTag::factory(2)->create();
        \App\Models\ArticleImage::factory(2)->create();
        \App\Models\Article::factory(2)->create();
        \App\Models\ArticleComment::factory(2)->create();
    }
}
