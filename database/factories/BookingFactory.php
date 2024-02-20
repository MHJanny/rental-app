<?php

namespace Database\Factories;

use App\Models\User;
use App\Constants\Role;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id' => Property::pluck('id')->random(),
            'user_id' => User::whereNotIn('role', [Role::ADMINISTRATOR, Role::RENTOWNER])->pluck('id')->random(),
            'check_in' => $this->faker->date,
            'check_out' => $this->faker->date,
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}