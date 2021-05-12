<?php

namespace Database\Factories;

use App\Models\ArticleComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message'=>$this->faker->text(60),
            'created_at'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'updated_at'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'article_id' => rand(1,9),
            'author' => $this->faker->name
        ];
    }
}
