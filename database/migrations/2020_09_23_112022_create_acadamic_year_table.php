<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcadamicYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acadamic_year', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('acadamic_year')->nullable();
            $table->string('previous_acadamic_year')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('acadamic_year');
    }
}
