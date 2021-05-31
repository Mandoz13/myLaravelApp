<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $this->faker->word(1),
        'artistName' => $this->faker->word(2),
        'ratings' => $this->faker->randomDigit,
        'description' => $this->faker->paragraph,
        'trackCount' => $this->faker->randomDigit,
        'genreNames' => $this->faker->word(2),
        'releaseDate' => now(),
        'created_at' => now(),
        'updated_at' => now(),
        'user_id' =>$this->faker->randomDigit + 1,
        ];
    }
}
