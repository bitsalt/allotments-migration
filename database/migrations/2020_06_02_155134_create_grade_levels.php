<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeLevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('school_year')->nullable();
            $table->integer('grade_level')->nullable();
            $table->char('grade_level_name', 10)->nullable();
            $table->integer('display_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_levels');
    }
}
