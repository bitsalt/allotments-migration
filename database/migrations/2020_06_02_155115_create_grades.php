<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->char('grade',2)->nullable();
            $table->integer('school_year')->nullable();
            $table->integer('grade_order')->nullable();
            $table->decimal('moe_divisor', 10, 2)->nullable();
            $table->decimal('ta_divisor', 10, 2)->nullable();
            $table->decimal('moe_divisor_override1', 10, 2)->nullable();
            $table->decimal('ta_divisor_override1', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
