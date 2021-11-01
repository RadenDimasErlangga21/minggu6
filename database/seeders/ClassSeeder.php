<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = [
            ['class_name' => 'MI 2A',],
            ['class_name' => 'MI 2B',],
            ['class_name' => 'MI 2C',],
            ['class_name' => 'MI 2D',],
            ['class_name' => 'MI 2E',],
            ['class_name' => 'MI 2F',],
            ['class_name' => 'MI 2G',],
        ];
        DB ::table('classes')->insert($class);
    }
}
