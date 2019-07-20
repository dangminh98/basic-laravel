<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count() <= 0) {
            DB::table('students')->insert([
                [
                    'name' => 'Dang Minh',
                    'address' => 'My Dinh',
                    'university' => 'FPT Polytechnic',
                    'class_id' => 1
                ],
                [
                    'name' => 'Duong Manh Hoang',
                    'address' => 'Hoang Mai',
                    'university' => 'FPT Polytechnic',
                    'class_id' => 1
                ],
                [
                    'name' => 'Pham Quoc Can',
                    'address' => 'My Dinh',
                    'university' => 'FPT Polytechnic',
                    'class_id' => 1
                ],
            ]);
        }
    }
}
