<?php

namespace Database\Factories;

use App\Models\User;
use App\Constants\Role;
use App\Models\Booking;
use App\Models\Property;
use App\Constants\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;
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
            'status' => $this->faker->randomElement([Status::PENDING, Status::APPROVED, Status::REJECTED]),
        ];
    }
}