<?php

namespace Database\Factories;

use App\Models\ArticleImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleImage::class;

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
            'size'=>rand(1,20),
            'path'=>'article.jpg'
        ];
    }
}
