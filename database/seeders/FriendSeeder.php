<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Friend;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1, 6) as $index){
            $user = User::inRandomOrder()->first();
            
            do{
                $friend = User::inRandomOrder()->first();
            } while( $friend->id == $user->id);

            Friend::create([
                'user_id' => $user->id,
                'friends_id' => $friend->id,
                'status' => $faker->randomElement(['Accepted', 'Pending', 'Rejected']),
            ]);
        }
    }
}
