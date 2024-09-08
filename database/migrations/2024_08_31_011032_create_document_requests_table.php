<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('document_requests', function (Blueprint $table) {
            $table->increments('id');  // Primary key
            $table->bigInteger('student_id')->unsigned();  // Foreign key to students table
            $table->integer('document_id')->unsigned();  // Foreign key to documents table
            $table->string('specify_other_document')->nullable();  // Other document details if 'Others' is selected
            $table->text('request_reason');  // Reason for the request
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->timestamps(); // Make sure this line is present
            // Foreign key constraints
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('document_requests');
    }
}

