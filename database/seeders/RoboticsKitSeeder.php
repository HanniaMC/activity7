<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        RoboticsKit::create([
            'name' => 'Starter Robotics Kit'
        ]);

        RoboticsKit::create([
            'name' => 'Advanced Robotics Kit'
        ]);

        RoboticsKit::create([
            'name' => 'AI Robotics Kit'
        ]);
    }
}