<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_type', function (Blueprint $table) {
            $table->id();
            $table->integer('school_year')->nullable();
            $table->string('school_type')->nullable();
            $table->string('school_type_name')->nullable();
            $table->char('override1', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_type');
    }
}
