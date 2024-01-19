<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'Tren 1',
                'passengers' => 566,
                'year' => 1957,
                'train_type_id' => 1
            ],
            [
                'name' => 'Tren 2',
                'passengers' => 897,
                'year' => 1999,
                'train_type_id' => 2
            ],
            [
                'name' => 'Tren 3',
                'passengers' => 557,
                'year' => 2001,
                'train_type_id' => 3
            ]
        ]);
    }
}
