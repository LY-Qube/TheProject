<?php

namespace Database\Factories;

use App\Models\Personal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name'         => $this->faker->lastName,
            'first_name'        => $this->faker->firstName,
            'gender'            => "Men",
            'phone'             => $this->faker->phoneNumber,
            'birth'             => Carbon::parse()->subYears(35),
            'address'           => $this->faker->address,
            'city'              => $this->faker->city
        ];
    }
}
