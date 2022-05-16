<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tasks')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'user_id'=>Faker::randomDigit(10)
            
        ]);
        //
        // return [
        //     'task'=>Faker::sentence($nbWords = 3, $variableNbWords = true),
        //     'description'=>Faker::sentence($nbWords = 8, $variableNbWords = true),
        //     'completed'=>Faker::numberBetween($min = 0, $max = 1), // 8567
        //     'updated_at'=>Faker::dateTime($max = 'now', $timezone = null), //2022-04-01 05:44:4

        // ];
    }
}
