<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            [
                'fname' => 'Ariel',
                'lname' => 'Yandan',
                'position' => 'Chairman',
                'sex' => 'Male',
                'contactno'=> 279568493,
                'email' => 'arielyandan@gmail.com',
                'address' => 'Olongapo City',
            ],
            [
                'fname' => 'James',
                'lname' => 'Paneza',
                'position' => 'Councilor',
                'sex' => 'Male',
                'contactno'=> 278453216,
                'email' => 'jamespaneza@gmail.com',
                'address' => 'Olongapo City',
            ],            
            [
                'fname' => 'Jerika',
                'lname' => 'Soriano',
                'position' => 'Secretary',
                'sex' => 'Female',
                'contactno'=> 279856978,
                'email' => 'jerikasoriano@gmail.com',
                'address' => 'Olongapo City',
            ],
            ]);   
    }
}
