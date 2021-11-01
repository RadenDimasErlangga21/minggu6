<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [ 'course_name' => 'Pemrograman Berbasis Objek', 'sks' => 3, 'semester' => 3,],
            [ 'course_name' => 'Pemrograman Web Lanjut', 'sks' => 3, 'semester' => 3,],
            [ 'course_name' => 'Basis Data Lanjut', 'sks' => 2, 'semester' => 3,],
            [ 'course_name' => 'Praktikum Basis Data Lanjut', 'sks' => 3, 'semester' => 3,],
        ];
        DB::table('courses')->insert($courses);
    }
}
