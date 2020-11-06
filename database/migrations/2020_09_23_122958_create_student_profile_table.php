<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('form_number')->nullable();
            $table->string('serial_id')->nullable();
            $table->string('admission_number')->nullable();
            $table->string('acadamic_year')->nullable();
            $table->string('school_name')->nullable();
            $table->string('class_teacher_name')->nullable();
            $table->string('class_name')->nullable();
            $table->string('section')->nullable();
            $table->string('admission_scheme')->nullable();
            $table->string('admission_date')->nullable();

            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('religion')->nullable();
            $table->string('category')->nullable();
            $table->string('cast')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('gender')->nullable();
            $table->string('file')->nullable();
            $table->string('date_of_birth')->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('address')->nullable();

            $table->string('guardian_name')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('previous_school')->nullable();

          
           
            $table->string('previous_school_address')->nullable();
            $table->string('previous_class_name')->nullable();
            $table->string('medium_of_instruction')->nullable();
            $table->string('extra_curricular_activity')->nullable();
            $table->string('health_problem')->nullable();
            $table->string('recogniser')->nullable();
            $table->string('date_of_leaving')->nullable();

         
            $table->string('certificate')->nullable();
            $table->string('bonafide_certificate')->nullable();

            $table->string('admission_fees_discount')->nullable();
            $table->string('term_fees_discount')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('student_profile');
    }
}
