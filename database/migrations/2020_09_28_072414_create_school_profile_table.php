<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('society_name')->nullable();
            $table->string('society_reg_no')->nullable();
            $table->string('society_address')->nullable();
            $table->string('so_city')->nullable();
            $table->string('so_taluka')->nullable();
            $table->string('so_district')->nullable();
            $table->string('so_state')->nullable();
            $table->string('so_country')->nullable();
            $table->string('so_zip_code')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_address')->nullable();
            $table->string('file')->nullable();
            $table->string('school_city')->nullable();
            $table->string('school_taluka')->nullable();
            $table->string('school_district')->nullable();
            $table->string('school_state')->nullable();
            $table->string('school_country')->nullable();
            $table->string('school_zip_code')->nullable();
            $table->string('school_type')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('genral_reg_no')->nullable();
            $table->string('school_recog_no')->nullable();
            $table->string('udise_no')->nullable();
            $table->string('affiliation_name')->nullable();
            $table->string('gr_number')->nullable();
            $table->string('medium')->nullable();
            $table->string('board')->nullable();
            $table->string('contact_number');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('school_profile');
    }
}
