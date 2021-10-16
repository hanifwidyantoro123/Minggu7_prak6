<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'nim' => '2031710039',
                'name' => 'Hanif Widyantoro',
                'class' => 'MI2E',
                'departement' => 'Informatika',
                'phone_number' => '087862278323'
            ],
            [
                'nim' => '2031710040',
                'name' => 'Ichsani Niken',
                'class' => 'MI2E',
                'departement' => 'Informatika',
                'phone_number' => '085704117601' 
            ],
            [
                'nim' => '2031710041',
                'name' => 'Irva Juliani',
                'class' => 'MI2E',
                'departement' => 'Informatika',
                'phone_number' => '089876678452'
            ]
        ]);
    }
}
