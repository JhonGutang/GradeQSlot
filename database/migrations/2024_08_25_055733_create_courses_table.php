<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing course_id
            $table->unsignedInteger('year_level'); // Year level
            $table->tinyInteger('semester')->unsigned(); // 1 or 2
            $table->string('course_code', 255)->unique(); // Course code
            $table->string('course_name'); // Course name
            $table->timestamps(); // Created_at and Updated_at
        });
        DB::statement("ALTER TABLE courses AUTO_INCREMENT = 1;");
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
