<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\SmallArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmallArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmallArticle::factory()->count(10)->create();
    }
}
