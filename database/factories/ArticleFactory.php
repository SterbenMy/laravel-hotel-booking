<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'short_description' => $this->faker->realText(),
            'published_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'create_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'modified_at' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'content' => $this->faker->realText(400),
            'category_id' => rand(1,6),
            'author_id'=>rand(1,9),
            'image_id' => rand(1,20),
            'SEO_title' => $this->faker->title(),
            'SEO_description' => $this->faker->text(150),
            'slug' => $this->faker->unique()->regexify('[A-Za-z0-9]{20}')

        ];
    }
}
