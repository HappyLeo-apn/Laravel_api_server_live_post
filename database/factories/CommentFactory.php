<?php

namespace Database\Factories;

use App\Models\Post;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'body' => [],
            'user_id' => 1,
            'post_id' => FactoryHelper::getRandomModelId(Post::class),
        ];
    }
}
