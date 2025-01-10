<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        User::create([
            'name' => "Kevin Petersen",
            'profile_picture' => 'Assets/KevinPetersen.png',
            'email' => "KevinPetersen@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'gender' => 'Male',
            'linkedin_link' => $faker->url(),
            'wallet' => 0,
            'biography' => $faker->paragraph(4),
            'mobile_number' => "081211137770"
        ]);

        User::create([
            'name' => "Komi Shouko",
            'profile_picture' => 'Assets/KomiShouko.png',
            'email' => "KomiShouko@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'gender' => 'Female',
            'linkedin_link' => $faker->url(),
            'wallet' => 100000,
            'biography' => $faker->paragraph(4),
            'mobile_number' => "081211137771"
        ]);

        User::create([
            'name' => "Testing User 1",
            'profile_picture' => 'Assets/TestingUser1.png',
            'email' => "Testing1@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'gender' => 'Male',
            'linkedin_link' => $faker->url(),
            'wallet' => 0,
            'biography' => $faker->paragraph(4),
            'mobile_number' => "081211137772"
        ]);

        User::create([
            'name' => "Testing User 2",
            'profile_picture' => 'Assets/TestingUser2.png',
            'email' => "Testing2@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'gender' => 'Female',
            'linkedin_link' => $faker->url(),
            'wallet' => 0,
            'biography' => $faker->paragraph(4),
            'mobile_number' => "081211137773"
        ]);

        User::create([
            'name' => "Testing User 3",
            'profile_picture' => 'Assets/TestingUser3.png',
            'email' => "Testing3@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'gender' => 'Female',
            'linkedin_link' => $faker->url(),
            'wallet' => 0,
            'biography' => $faker->paragraph(4),
            'mobile_number' => "081211137774"
        ]);
    }
}
