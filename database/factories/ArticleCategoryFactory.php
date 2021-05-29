<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'created_at'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'updated_up'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
           // 'parent_category' => rand(1,3),
            'slug' => $this->faker->unique()->regexify('[A-Za-z0-9]{20}'),
            'SEO_title' => $this->faker->title(),
            'SEO_description' => $this->faker->text(150)
        ];
    }
}
