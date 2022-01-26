<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'status' => Arr::random(['completed', 'incomplete']),
            'deadline_at' => Carbon::create(2022, 1, 1)->addDays(rand(0, 30)),
            'completed_at' => null,
        ];
    }

    // public function configure() {
    //     return $this->afterMaking(function (Task $task) {
    //         if()
    //     });
    // }
}
