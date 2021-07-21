<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('specialties')->insert([
            [
                'name' => 'Cardiology',
            ],
            [
                'name' => 'Ophtalmology',
            ],
            [
                'name' => 'Oral Health',
            ],
        ]);
        
        \DB::table('doctors')->insert([
            [
                'lastname' => 'Myers',
                'firstname' => 'Michael',
                'specialty_id' => 1,
            ],
            [
                'lastname' => 'Krueger',
                'firstname' => 'Freddy',
                'specialty_id' => 2,
            ],
            
            [
                'lastname' => 'Voorhees',
                'firstname' => 'Jason',
                'specialty_id' => 3,
            ],
        ]);

        \DB::table('patients')->insert([
            [
                'lastname' => 'Prescott',
                'firstname' => 'Sidney',
            ],
            [
                'lastname' => 'Strode',
                'firstname' => 'Laurie',
            ],
            
            [
                'lastname' => 'Bates',
                'firstname' => 'Norman',
            ],
        ]);

        \DB::table('appointments')->insert([
            [
                'date' => '2021-07-25 09:00:00',
                'doctor_id' => '1',
                'patient_id' => '2',
            ],
            [
                'date' => '2021-07-26 07:30:00',
                'doctor_id' => '3',
                'patient_id' => '1',
            ],
            
            [
                'date' => '2021-07-28 13:00:00',
                'doctor_id' => '2',
                'patient_id' => '3',
            ],
        ]);
    }
}
