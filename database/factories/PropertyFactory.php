<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\Property;
use App\Constants\Status;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'category_id' => Category::pluck('id')->random(),
            'user_id' => User::pluck('id')->random(),
            'address' => $this->faker->address,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'gallery_id' => null,
            'price' => $this->faker->randomNumber(4),
            'status' => Status::DRAFT,
            'is_featured' => $this->faker->boolean(30),
            'uuid'  => Str::uuid(),
        ];
    }

    /**
     * Indicate that the property should have a random media from storage.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withRandomMedia()
    {
        return $this->afterCreating(function (Property $property) {
            $files = Storage::files('public');
            $randomFile = $files[array_rand($files)];
            $property->addMedia(storage_path('app/public' . $randomFile))
                ->toMediaCollection('property-images');
        });
    }
}
