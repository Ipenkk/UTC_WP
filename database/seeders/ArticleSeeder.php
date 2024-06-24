<?php

namespace Database\Seeders;

use App\Models\Writer;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Category = Category::all();
        $Writer = Writer::all();
        for ($i = 1; $i <= 20; $i++) {
            Article::create([
                'title' => fake()->sentence(2),
                'content' => fake()->paragraph(20),
                'slug' => fake()->slug(),
                'image' => "/img/{$i}.jpg",
                'date_published' => fake()->date(),
                'category_id' => $Category->random()->id,
                'writer_id' => $Writer->random()->id
            ]);
        }
    }
}
