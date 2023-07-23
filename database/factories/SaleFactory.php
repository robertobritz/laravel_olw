<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Client;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller_id' => Seller::Factory(),
            'client_id' => Client::factory(),
            'sold_at' => fake()->dateTimeBetween('-8 years', '-1 year'), // sereve para criar data entre esses anos
            'total_amount' => fake()->numberBetween(10000,50000),
            'status' => fake()->randomElement(Status::cases()), // Utiliza o nosso enum

        ];
    }
}
