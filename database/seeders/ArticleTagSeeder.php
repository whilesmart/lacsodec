<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_tags')->insert([
            [
                'name' => 'sport',
            ],
            [
                'name' => 'politics',
            ],
            [
                'name' => 'news',
            ],
        ]);
    }
}
