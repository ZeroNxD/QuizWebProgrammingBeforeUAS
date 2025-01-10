<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Field;
use App\Models\UserField;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user){
            $fields = Field::inRandomOrder()->distinct()->limit(3)->get();

            foreach($fields as $field){
                UserField::create([
                    'user_id' => $user->id,
                    'field_id' => $field->id,
                ]);
            }
        }
    }
}
