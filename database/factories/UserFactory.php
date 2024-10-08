<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return array<string, mixed>
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
=======
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
=======
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
>>>>>>> 7fbd055b94355a4e66eeaae25932488a9754a3f5
    }
}
