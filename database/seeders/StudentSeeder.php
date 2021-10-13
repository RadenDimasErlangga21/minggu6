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
        DB::table('students')->insert
        ([
            'nim' => '2031710121',
            'name' => 'Raden Dimas Erlangga',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '081259945857',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710001',
            'name' => 'Raviansyah Yudistira Pratama',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '0895396629202',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710082',
            'name' => 'Reihan Amru',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '085645510533',
        ]);
    }
}
