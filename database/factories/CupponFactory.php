<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Support\Str;
use App\Constants\CupponType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuppon>
 */
class CupponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'code' => Str::random(3),
            'type'  => fake()->randomElement([CupponType::PERCENTAGE, CupponType::FIXED]),
            'amount' => fake()->randomNumber(4),
            'property_id'   => Property::pluck('id')->random(),
        ];
    }
}
