<?php

declare(strict_types=1);

namespace Database\Factories\User;

use App\Models\Post;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), # If this line is commented out, then phpstan will not error.
        ];
    }
}
