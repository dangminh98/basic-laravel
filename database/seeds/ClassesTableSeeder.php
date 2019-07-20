<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('classes')->count() <= 0) {
            DB::table('classes')->insert([
                [
                    'class_name' => 'PT00001',
                    'teacher_name' => 'teacher 1',
                    'major' => 'CNTT'
                ],
                [
                    'class_name' => 'PT00002',
                    'teacher_name' => 'teacher 2',
                    'major' => 'Marketing'
                ],
                [
                    'class_name' => 'PT00003',
                    'teacher_name' => 'teacher 3',
                    'major' => 'Design'
                ],
            ]);
        }
    }
}
