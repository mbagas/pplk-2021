<?php

namespace Database\Factories;

use App\Models\FunFact;
use Illuminate\Database\Eloquent\Factories\Factory;

class FunFactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FunFact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body'=>$this->faker->word()
        ];
    }
}
