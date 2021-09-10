<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Sam',
            'last_name' => 'Wijnsma',
            'username' => 'SamWijnsma',
            'role_id' => 2,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('Gorilla1!'), // password
            'remember_token' => Str::random(10),
        ]);
        
        User::factory(48)->create();
    }
}