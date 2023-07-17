<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\patient;
class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patient = collect([
            [
             'name' => 'Al-amin',
             'email' => 'al-amin@gmail.com',
             'age' => 23,
             'city' => 1,
            ],
            [
             'name' => 'Ayesha',
             'email' => 'ayesha@gmail.com',
             'age' => 21,
             'city' => 2,
            ],
         ]);
         $patient->each(function($psngr){
             patient::insert($psngr);
          });
    }
}
