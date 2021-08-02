<?php

namespace Database\Factories;

use App\Models\GameReference;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameReferenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameReference::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'code'=>'mlg_game_'.rand(1000,9999),
        ];
    }
}
