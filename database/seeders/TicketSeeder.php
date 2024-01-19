<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date' => '1995-01-29',
                'price' => 23.1,
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => '2007-12-30',
                'price' => 46.4,
                'train_id' => 2,
                'ticket_type_id' => 2
            ],
            [
                'date' => '2020-11-02',
                'price' => 56.6,
                'train_id' => 3,
                'ticket_type_id' => 3
            ]
        ]);
    }
}
