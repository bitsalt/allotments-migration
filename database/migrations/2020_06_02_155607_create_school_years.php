<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolYears extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_years', function (Blueprint $table) {
            $table->integer('school_year');
            $table->string('display')->nullable();
            $table->tinyInteger('current_ind')->nullable();
            $table->tinyInteger('admin_current_ind')->nullable();
            $table->tinyInteger('visible_to_schools')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_years');
    }
}
