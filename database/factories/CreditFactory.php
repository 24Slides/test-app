<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Credit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Credit>
 */
class CreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id' => Account::factory(),
            'amount' => fake()->randomFloat(2, 0, 1000),
        ];
    }
}
