<?php

namespace Database\Factories;

use App\Models\conferences;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

class ConferencesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = conferences::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'descricao' => $this->faker->text,
            'local' => $this->faker->locale,
            'lotacao' => $this->faker->random_int(1, 20),
            'inscritos' => $this->faker->random_int(1, 20),
            'data' => $this->faker->dateTime];
    }
}
