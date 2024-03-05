<?php

namespace Database\Factories;

use App\Constants\PaymentMethod;
use App\Constants\Role;
use App\Constants\Status;
use App\Models\Booking;
use App\Models\Property;
use App\Models\User;
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
            'billing_address' => json_encode(
                [
                    'firstName' => $this->faker->firstName,
                    'lastName' => $this->faker->lastName,
                    'company' => $this->faker->company,
                    'address1' => $this->faker->address,
                    'address2' => $this->faker->secondaryAddress,
                    'city' => $this->faker->city,
                    'country' => $this->faker->country,
                    'zip' => $this->faker->postcode,
                    'email' => $this->faker->email,
                    'phone' => $this->faker->phoneNumber,
                    'note' => $this->faker->sentence,
                    'price' => $this->faker->numberBetween(100, 1000),
                    'quantity' => $this->faker->numberBetween(1, 10),
                    'payment_method' => $this->faker->randomElement([PaymentMethod::CASH, PaymentMethod::CHEQUE, PaymentMethod::BKASH, PaymentMethod::ROCKET, PaymentMethod::SSLCOMMERZ, PaymentMethod::STRIPE]),
                ]
            ),
            'status' => $this->faker->randomElement([Status::PENDING, Status::APPROVED, Status::REJECTED]),
        ];
    }
}
