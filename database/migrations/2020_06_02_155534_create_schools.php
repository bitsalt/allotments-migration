<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->integer('school');
            $table->integer('school_year');
            $table->string('school_name', 50)->nullable();
            $table->char('magnet_ind',1)->nullable();
            $table->char('restart_ind', 1)->nullable();
            $table->integer('school_grade_level_id')->nullable();
            $table->integer('school_type_id')->nullable();
            $table->dateTime('date_created');
            $table->dateTime('date_modified')->nullable();
            $table->tinyInteger('has_scheduled_assistance')->default(0);
            $table->integer('schedule_assistance_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
