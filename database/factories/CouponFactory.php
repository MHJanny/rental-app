<?php

namespace Database\Factories;

use App\Constants\CouponType;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
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
            'type' => fake()->randomElement([CouponType::PERCENTAGE, CouponType::FIXED]),
            'amount' => fake()->randomNumber(4),
            'property_id' => Property::pluck('id')->random(),
        ];
    }
}
