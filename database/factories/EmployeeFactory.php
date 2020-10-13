<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'middlename' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'salary' => $this->faker->numberBetween($min = 100, $max = 1000),
            'employed_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'position_id' => function() {
                $dir = Position::get()->first;
                return Position::all()->where('name', '!=', $dir->name)->random()->id;
            }
        ];
    }
}
