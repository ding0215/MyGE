<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(
            ['State_name' => 'Perlis'],
            ['State_name' => 'Kedah'],
            ['State_name' => 'Kelantan'],
            ['State_name' => 'Terengganu'],
            ['State_name' => 'Penang'],
            ['State_name' => 'Perak'],
            ['State_name' => 'Pahang'],
            ['State_name' => 'Selangor'],
            ['State_name' => 'Kuala Lumpur'],
            ['State_name' => 'Putrajaya'],
            ['State_name' => 'Negeri Sembilan'],
            ['State_name' => 'Malacca'],
            ['State_name' => 'Johor'],
            ['State_name' => 'Labuan'],
            ['State_name' => 'Sabah'],
            ['State_name' => 'Sarawak'],
        );
    }
}
