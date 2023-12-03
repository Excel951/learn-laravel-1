<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			//
			'title' => fake()->unique()->sentence(random_int(2, 10)),
			'slug' => fake()->unique()->slug(),
			'excerpt' => fake()->sentences(random_int(2, 10), true),
			'body' => collect(fake()->paragraphs(random_int(5, 10)))
				->map(fn ($p) => "<p>$p</p>")
				->implode(''),
			'category_id' => fake()->numberBetween(1, 3),
			'user_id' => fake()->numberBetween(1, 5),
		];
	}
}
