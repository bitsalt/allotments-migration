<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMileageVars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mileage_vars', function (Blueprint $table) {
            $table->integer('school_year')->nullable();
            $table->decimal('mileage_rate', 5, 2)->nullable();
            $table->integer('trips')->nullable();
            $table->integer('bonus_trips')->nullable();
            $table->decimal('bonus_miles', 5, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mileage_vars');
    }
}
