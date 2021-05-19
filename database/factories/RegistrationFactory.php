<?php

namespace Database\Factories;

use App\Models\Registration;
use App\Models\Specialty;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->name,
            'last_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' =>$this->faker->phoneNumber,
            'venue'=> $this->faker->name,
        ];
    }
}
