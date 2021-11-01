<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class percobaanNilaiStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_student = [
            [ 'course_id' => 1, 'student_id' => 1, 'nilai' => 'A', ],
            [ 'course_id' => 2, 'student_id' => 1, 'nilai' => 'A', ],
            [ 'course_id' => 3, 'student_id' => 1, 'nilai' => 'B', ],
            [ 'course_id' => 4, 'student_id' => 1, 'nilai' => 'A', ],

            [ 'course_id' => 1, 'student_id' => 2, 'nilai' => 'B', ],
            [ 'course_id' => 2, 'student_id' => 2, 'nilai' => 'A', ],
            [ 'course_id' => 3, 'student_id' => 2, 'nilai' => 'A', ],
            [ 'course_id' => 4, 'student_id' => 2, 'nilai' => 'B', ],

            [ 'course_id' => 1, 'student_id' => 3, 'nilai' => 'B', ],
            [ 'course_id' => 2, 'student_id' => 3, 'nilai' => 'B', ],
            [ 'course_id' => 3, 'student_id' => 3, 'nilai' => 'B', ],
            [ 'course_id' => 4, 'student_id' => 3, 'nilai' => 'A', ],
    
        ];

        DB::table('course_student')->insert($course_student);
    }
}