<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $repeater = 5;

    public function run(): void
    {
        $this->repeat(); 
    }

    /**
     * Array of element[from table course_student] and random selection while seeding
     */
    private function element(){
        $status = ['approved','on hold','declined'];
        $rand_value = array_rand($status);
        return $status[$rand_value];
    }
    /**
     * create the rows no. $repeater times
     */
    private function repeat(){
        for($i=0 ; $i<$this->repeater;$i++)
        {
            DB::table('course_student')->insert([
                'course_id' => Course::all()->random()->id,
                'student_id'=> Student::all()->random()->id,
                'status' => $this->element() ,
            ]);
        }
    }
    
}
