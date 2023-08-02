<?php

namespace Database\Factories;

use App\Models\Post;
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
    public function definition()
    {
        return [
            'post_id' => Post::factory()->create()->id, // Assign a random existing post as the parent post
            'reply' => $this->faker->sentence, // Add a random reply value
            // 'content' => $this->faker->paragraph,
        ];
    }
}
