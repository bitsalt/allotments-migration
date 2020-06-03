<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembership extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->integer('school_id')->nullable();
            $table->integer('school_year')->nullable();
            $table->char('day_proj_plan_ind', 2)->nullable();
            $table->char('grade', 2)->nullable();
            $table->integer('studentcount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership');
    }
}
