<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');  // Primary key
            $table->string('name')->unique();  // Document name
            $table->text('description')->nullable();  // Document description
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');  // Document status
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
