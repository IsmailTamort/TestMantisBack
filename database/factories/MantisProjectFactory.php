<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MantisProject;

class MantisProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MantisProject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'status' => 10,
            'enabled' => 1,
            'view_state' => 50,
            'access_min' => 10,
            'file_path' => '',
            'description' => $this->faker->paragraph,
            'category_id' => 2,
            'inherit_global' => 0,
        ];
    }
}
