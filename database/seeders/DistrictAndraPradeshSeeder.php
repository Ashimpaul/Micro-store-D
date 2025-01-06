<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DistrictAndraPradeshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $districts = [
            ['name' => 'Anantapur'],
            ['name' => 'Chittoor'],
            ['name' => 'East Godavari'],
            ['name' => 'Guntur'],
            ['name' => 'Krishna'],
            ['name' => 'Kurnool'],
            ['name' => 'Nellore'],
            ['name' => 'Prakasam'],
            ['name' => 'Srikakulam'],
            ['name' => 'Visakhapatnam'],
            ['name' => 'Vizianagaram'],
            ['name' => 'West Godavari'],
            ['name' => 'YSR Kadapa'],
        ];

        DB::table('district_andra_pradesh')->insert($districts);
    }
}
