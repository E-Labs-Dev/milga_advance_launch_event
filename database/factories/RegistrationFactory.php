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
        $venueIds = Venue::pluck('id')->toArray();
        $specialtyIds = Specialty::pluck('id')->toArray();
        return [
            'first_name'=>$this->faker->name,
            'last_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' =>$this->faker->phoneNumber,
            'specialty_id'=> $specialtyIds[rand(0,count($specialtyIds) - 1)],
            'venue_id'=> $venueIds[rand(0,count($venueIds) - 1)],
        ];
    }
}
