<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), 
            'address' => $this->faker->address,
            'mobile_number' => $this->faker->phoneNumber,
            'dob' => $this->faker->date(),
            'email_verified_at' => null, 
        ];
    }

    public function verified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => now(), // Set verified at current time
            ];
        });
    }

    public function withPersonalTeam()
    {
        return $this->afterCreating(function (User $user) {
            // Assuming you have a Team model, this creates a team for the user
            $user->ownedTeams()->create(['name' => $user->name . "'s Team"]);
        });
    }
}
