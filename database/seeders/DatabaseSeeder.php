<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Constants\Role;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'role' => Role::ADMINISTRATOR,
        ]);

        User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            PropertySeeder::class,
            BookingSeeder::class,
        ]);

        Coupon::factory(10)->create();
    }
}
