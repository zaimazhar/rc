<?php

namespace Database\Factories;

use App\Models\Task;
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
            'deadline_at' => $this->faker->dateTimeBetween('-3 weeks', '+3 weeks'),
            'completed_at' => null,
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Task $task) {
            if ($task->deadline_at > Carbon::today('Asia/Kuala_Lumpur')) {
                $task->completed_at = Carbon::today('Asia/Kuala_Lumpur');
            }
        });
    }
}
