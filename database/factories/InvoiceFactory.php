<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => 'INV-1000' . $this->faker->unique()->numberBetween(1, 500),
            'customerId' => \App\Models\Customer::factory(),
            'date' => $this->faker->date(),
            'dueDate' => $this->faker->date(),
            'reference' => 'REF-' . $this->faker->unique()->numberBetween(1, 500),
            'termsAndConditions' => $this->faker->optional()->sentence(),
            'subTotal' => $this->faker->randomFloat(2, 100, 1000),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'total' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
