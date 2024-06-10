<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'is_completed' => fake()->boolean(),
            'start_at' => Carbon::now(),
            'expired_at' => Carbon::now()->addDays(7),
            'company_id' => Company::inRandomOrder()->pluck('id')->first(),
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
