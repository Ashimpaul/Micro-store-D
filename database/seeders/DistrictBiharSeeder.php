<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DistrictBiharSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $districts = [
            ['name' => 'Koriya'],
            ['name' => 'Surguja'],
            ['name' => 'Jashpur'],
            ['name' => 'Raigarh'],
            ['name' => 'Korba'],
            ['name' => 'Janjgir - Champa'],
            ['name' => 'Bilaspur'],
            ['name' => 'Kabeerdham'],
            ['name' => 'Rajnandgaon'],
            ['name' => 'Durg'],
            ['name' => 'Raipur'],
            ['name' => 'Mahasamund'],
            ['name' => 'Dhamtari'],
            ['name' => 'Uttar Bastar Kanker'],
            ['name' => 'Bastar'],
            ['name' => 'Narayanpur'],
            ['name' => 'Dakshin Bastar Dantewada'],
            ['name' => 'Bijapur'],
        ];

        DB::table('district_chhattisgarh')->insert($districts);
    }
}
