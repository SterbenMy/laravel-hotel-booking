<?php

namespace Database\Factories;

use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleTagFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleTag::class;

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
            'slug' => $this->faker->unique()->regexify('[A-Za-z0-9]{20}')
        ];
    }
}
