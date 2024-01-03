<?php

declare(strict_types=1);

namespace Database\Factories\User;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $models = User::class;

    public function definition(): array
    {
        return [
            'name' => Str::slug($this->faker->firstName()) . ' ' . Str::slug($this->faker->lastName()),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
        ];
    }
}