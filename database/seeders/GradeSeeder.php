<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $courses = Course::all();

        // For each student, assign a random grade for some courses
        foreach ($students as $student) {
            foreach ($courses->random(rand(2, 4)) as $course) {
                Grade::create([
                    'student_id' => $student->id,
                    'course_id'  => $course->id,
                    'grade'      => ['A', 'B', 'C', 'D', 'F'][array_rand(['A', 'B', 'C', 'D', 'F'])],  // Random grade
                ]);
            }
        }
    }
}
