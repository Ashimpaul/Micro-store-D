<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['name' => 'Andhra Pradesh', 'iso' => 'IN-AP', 'vehicle_code' => 'AP', 'districts_tables' => 'district_andra_pradesh'],
            ['name' => 'Bihar', 'iso' => 'IN-BR', 'vehicle_code' => 'BR', 'districts_tables' => 'district_bihar'],
            ['name' => 'Chhattisgarh', 'iso' => 'IN-CG', 'vehicle_code' => 'CG', 'districts_tables' => 'district_chhattisgarh'],
            ['name' => 'Goa', 'iso' => 'IN-GA', 'vehicle_code' => 'GA', 'districts_tables' => 'district_goa'],
            ['name' => 'Haryana', 'iso' => 'IN-HR', 'vehicle_code' => 'HR', 'districts_tables' => 'district_haryana'],
            ['name' => 'Himachal Pradesh', 'iso' => 'IN-HP', 'vehicle_code' => 'HP', 'districts_tables' => 'district_himachal_pradesh'],
            ['name' => 'Jharkhand', 'iso' => 'IN-JH', 'vehicle_code' => 'JH', 'districts_tables' => 'district_jharkhand'],
            ['name' => 'Karnataka', 'iso' => 'IN-KA', 'vehicle_code' => 'KA', 'districts_tables' => 'district_karnataka'],
            ['name' => 'Kerala', 'iso' => 'IN-KL', 'vehicle_code' => 'KL', 'districts_tables' => 'district_kerala'],
            ['name' => 'Madhya Pradesh', 'iso' => 'IN-MP', 'vehicle_code' => 'MP', 'districts_tables' => 'district_madhya_pradesh'],
            ['name' => 'Maharashtra', 'iso' => 'IN-MH', 'vehicle_code' => 'MH', 'districts_tables' => 'district_maharashtra'],
            ['name' => 'Odisha', 'iso' => 'IN-OD', 'vehicle_code' => 'OD', 'districts_tables' => 'district_odisha'],
            ['name' => 'Punjab', 'iso' => 'IN-PB', 'vehicle_code' => 'PB', 'districts_tables' => 'district_punjab'],
            ['name' => 'Rajasthan', 'iso' => 'IN-RJ', 'vehicle_code' => 'RJ', 'districts_tables' => 'district_rajasthan'],
            ['name' => 'Sikkim', 'iso' => 'IN-SK', 'vehicle_code' => 'SK', 'districts_tables' => 'district_sikkim'],
            ['name' => 'Tamil Nadu', 'iso' => 'IN-TN', 'vehicle_code' => 'TN', 'districts_tables' => 'district_tamil_nadu'],
            ['name' => 'Telangana', 'iso' => 'IN-TS', 'vehicle_code' => 'TG', 'districts_tables' => 'district_telangana'],
            ['name' => 'Uttar Pradesh', 'iso' => 'IN-UP', 'vehicle_code' => 'UP', 'districts_tables' => 'district_uttar_pradesh'],
            ['name' => 'Uttarakhand', 'iso' => 'IN-UK', 'vehicle_code' => 'UK', 'districts_tables' => 'district_uttarakhand'],
            ['name' => 'West Bengal', 'iso' => 'IN-WB', 'vehicle_code' => 'WB', 'districts_tables' => 'district_west_bengal'],
        ];

        DB::table('states')->insert($states);
    }
}
