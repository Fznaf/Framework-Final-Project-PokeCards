<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'favorite_list_id' => \App\Models\Favorites::factory(),
            'content' => $this->faker->paragraph,
        ];
    }
}
