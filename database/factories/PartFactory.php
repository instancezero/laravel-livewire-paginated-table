<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $orderQuantity = fake()->numberBetween(5, 100);
        $receiveQuantity = fake()->numberBetween(0, $orderQuantity);
        $cost = fake()->randomFloat(2, 0.1, 150.0);
        $extendedCost = $cost * $receiveQuantity;
        $dutyPct = fake()->randomFloat(1, 5.0, 15.0);
        $freightPct = fake()->randomFloat(1, 2.0, 10.0);
        return [
            'partNumber' => fake()->numerify('####-###'),
            'partDescription' => fake()->sentence(5, true),
            'vendorNumber' => fake()->numerify('0###'),
            'vendorName' => fake()->words(3, true),
            'orderQuantity' => $orderQuantity,
            'receiveQuantity' => $receiveQuantity,
            'cost' => $cost,
            'extendedCost' => $extendedCost,
            'dutyPct' => $dutyPct,
            'duty' => round($extendedCost * $dutyPct / 100.0, 2),
            'freightPct' => $freightPct,
            'freight' => round($extendedCost * $freightPct / 100.0, 2),
            'uom' => fake()->randomElement(['EA', 'EA', 'PK', 'BX', 'CTN']),
            'vendorPart' => strtoupper(fake()->bothify('??.###.##')),
        ];
    }

}
