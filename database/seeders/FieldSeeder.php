<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'name' => 'Software Development',
        ]);

        Field::create([
            'name' => 'Data Science',
        ]);

        Field::create([
            'name' => 'Artificial Intelligence',
        ]);

        Field::create([
            'name' => 'Network Security',
        ]);

        Field::create([
            'name' => 'Graphic Design',
        ]);

        Field::create([
            'name' => 'Civil Engineering',
        ]);

        Field::create([
            'name' => 'Healthcare',
        ]);

        Field::create([
            'name' => 'Entertainment',
        ]);

        Field::create([
            'name' => 'Social Media Content Creator',
        ]);

        Field::create([
            'name' => 'Entrepreneurship',
        ]);
       
    }
}
