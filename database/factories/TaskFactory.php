<?php

namespace Database\Factories;
use App\Models\Task;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->text($maxNbChars = 20),
            'description'=>$this->faker->text($maxNbChars = 255),
            'completed'=>$this->faker->numberBetween($min = 0, $max = 1) // 8567
        
              ];
    }
}
