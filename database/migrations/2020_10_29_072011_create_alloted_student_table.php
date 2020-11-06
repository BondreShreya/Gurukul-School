<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotedStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloted_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('allotment_id');
            $table->foreign('allotment_id')->references('id')->on('alloted');
            $table->string('admission_id');
            $table->foreign('admission_id')->references('id')->on('student_profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alloted_student');
    }
}
