<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('address');
            $table->date('date_of_birth');
            $table->integer('mobile_number');
            $table->string('permanent_address');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('nationality');
            $table->date('joining_date');
            $table->string('job title');
            $table->string('department');
            $table->string('supervisor_name');
            $table->integer('emergency_contact');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
