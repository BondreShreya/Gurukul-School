<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addfees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fees_head');
            $table->string('acadamic_year');
            $table->string('class_name');
            $table->string('school_name');
            $table->string('amount');
            $table->string('description');
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
        Schema::dropIfExists('addfees');
    }
}
