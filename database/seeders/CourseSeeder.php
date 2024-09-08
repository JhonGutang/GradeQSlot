<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            // Year Level 1 Courses
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'THEO 1', 'course_name' => 'Salvation of History'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'COMP 1', 'course_name' => 'Introduction to Computing'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'PROG 1', 'course_name' => 'Computer Programming 1'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'HCI', 'course_name' => 'Human Computer Interaction'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'GE 1', 'course_name' => 'Mathematics in the Modern World'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'GE 2', 'course_name' => 'Understanding the Self'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'Math Prep', 'course_name' => 'Pre-Calculus for Non-STEM (Analytic Geometry)'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'PE 1', 'course_name' => 'Physical Fitness'],
            ['year_level' => 1, 'semester' => 1, 'course_code' => 'CWTS1', 'course_name' => 'Civic Welfare and Training Service'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'THEO 2', 'course_name' => 'The Creed'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'PROG 2', 'course_name' => 'Computer Programming 2'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'DISCRETE 1', 'course_name' => 'Discrete Mathematics 1'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'WEB1', 'course_name' => 'Web Development'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'GE 3', 'course_name' => 'Readings in Philippine History'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'GE 4', 'course_name' => 'Purposive Communication'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'PE 2', 'course_name' => 'Rhythmic Activities'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'DATASTRUCT 1', 'course_name' => 'Data Structures and Algorithms'],
            ['year_level' => 1, 'semester' => 2, 'course_code' => 'CWTS2', 'course_name' => 'Civic Welfare and Training Service'],

            // Year Level 2 Courses
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'THEO 3', 'course_name' => 'Church and Sacraments'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'OOP', 'course_name' => 'Object-Oriented Programming'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'IM 1', 'course_name' => 'Information Management'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'ACCTG', 'course_name' => 'Fundamentals of Accounting'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'PT', 'course_name' => 'Platform Technologies'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'GE 5', 'course_name' => 'The Contemporary World'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'GE 6', 'course_name' => 'Art Appreciation'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'GEEL 1', 'course_name' => 'Living in the IT Era'],
            ['year_level' => 2, 'semester' => 1, 'course_code' => 'PE 3', 'course_name' => 'Individual/Dual Sports'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'THEO 4', 'course_name' => 'The Commandments'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'IM2', 'course_name' => 'Fundamentals of Database Systems'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'QM', 'course_name' => 'Quantitative Methods'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'NET 1', 'course_name' => 'Data Communications and Networking 1'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'IPT 1', 'course_name' => 'Integrative Programming and Technologies'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'GEEL 2', 'course_name' => 'Plane Trigonometry'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'GE 7', 'course_name' => 'Science and Technology'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'GEEL 3', 'course_name' => 'Reading Visual Arts'],
            ['year_level' => 2, 'semester' => 2, 'course_code' => 'PE 4', 'course_name' => 'Team Sports/Games'],
            
            // Year Level 3 Courses
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'REED 1', 'course_name' => 'Agustinian Recollect Spiritual Exercise (ARSE) with Congregational Study'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'NET 2', 'course_name' => 'Networking 2'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'ED', 'course_name' => 'Event Driven Programming'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'APPSDEV 1', 'course_name' => 'Application Development 1'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'SAD', 'course_name' => 'Systems Analysis and Design'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'OS', 'course_name' => 'Operating Systems'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'IT PROFEL 1', 'course_name' => 'IT Professional Elective 1'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'REED 2', 'course_name' => 'Evangelization'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'IAS 1', 'course_name' => 'Information Assurance and Security 1'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'RESEARCH 1', 'course_name' => 'Methods of Research in Computing'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'WEB 2', 'course_name' => 'Web Development 2'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'IM 3', 'course_name' => 'Information Management 3'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'IT PROFEL 2', 'course_name' => 'IT Professional Elective 2'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'MMC', 'course_name' => 'Multimedia Concepts'],
            ['year_level' => 3, 'semester' => 2, 'course_code' => 'SIA', 'course_name' => 'Systems Integration and Architecture'],
            ['year_level' => 3, 'semester' => 1, 'course_code' => 'CAPSTONE 1', 'course_name' => 'Capstone Project 1'],
            
            // Year Level 4 Courses
            ['year_level' => 4, 'semester' => 1, 'course_code' => 'REED 3', 'course_name' => 'Marriage and Family'],
            ['year_level' => 4, 'semester' => 1, 'course_code' => 'SA', 'course_name' => 'Systems Administration and Maintenance'],
            ['year_level' => 4, 'semester' => 1, 'course_code' => 'CAPSTONE 2', 'course_name' => 'Capstone Project 2'],
            ['year_level' => 4, 'semester' => 1, 'course_code' => 'IT PROFEL 3', 'course_name' => 'IT Professional Elective 3'],
            ['year_level' => 4, 'semester' => 1, 'course_code' => 'ITREVIEW', 'course_name' => 'Certification Review Exam'],
            ['year_level' => 4, 'semester' => 1, 'course_code' => 'GEEL 4', 'course_name' => 'Technopreneurship'],
            ['year_level' => 4, 'semester' => 2, 'course_code' => 'PRAC', 'course_name' => 'Practicum'],
            ['year_level' => 4, 'semester' => 2, 'course_code' => 'IT PROFEL 4', 'course_name' => 'IT Professional Elective 4'],
        ]);
        
    }
}
