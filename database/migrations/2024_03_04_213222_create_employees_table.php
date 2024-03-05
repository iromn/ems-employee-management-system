<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->unsignedBigInteger('department_id'); // Foreign key column
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
