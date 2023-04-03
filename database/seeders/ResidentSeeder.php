<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residents')->insert([
            [
                'fname' => 'Donna',
                'lname' => 'Moral',
                'age' => 21,
                'sex' => 'Female',
                'bdate' => 04/10/01,
                'bplace' => 'Olongapo',
                'address' => '193 Lower Kalaklan, Olongapo City',
                'contactno'=> 279535652,
                'email' => 'donnaxmoral@gmail.com',
                'occupation' => 'Astronaut',
                'religion' => 'Methodist'
            ],
            [
                'fname' => 'Dann',
                'lname' => 'Mallari',
                'age' => 21,
                'sex' => 'Female',
                'bdate' => 10/05/02,
                'bplace' => 'Olongapo',
                'address' => 'Mabayuan, Olongapo City',
                'contactno'=> 278759845,
                'email' => 'dannmallari@gmail.com',
                'occupation' => 'Driver',
                'religion' => 'Christian'
            ],
            [
                'fname' => 'Leighann',
                'lname' => 'Seneres',
                'age' => 21,
                'sex' => 'Female',
                'bdate' => 04/13/02,
                'bplace' => 'Olongapo',
                'address' => 'Gordon Heights, Olongapo City',
                'contactno'=> 275689458,
                'email' => 'leighannseneres@gmail.com',
                'occupation' => 'Teacher',
                'religion' => 'Methodist'
            ]
            ]); 
    }
}
