<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Subscription;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        // User::factory(1)->create();
        User::factory(1)->create([
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            "role" => "super",
        ]);
        User::factory(1)->create([
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            "role" => "admin",
        ]);
        User::factory(1)->create([
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            "role" => "member",
        ]);
        Organization::factory(5)->create();
        Subscription::factory(3)->create();
    }
}
