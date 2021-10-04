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
            'role_id' => 1,
            'email' => 'samwijnsma@outlook.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Gorilla1!'), // password
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'first_name' => 'Jelle',
            'last_name' => 'Slofstra',
            'username' => 'JelleSlofstra',
            'role_id' => 1,
            'email' => 'jelleslofstra@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Gorilla1!'), // password
            'remember_token' => Str::random(10),
        ]);
        
        User::factory(8)->create();
    }
}