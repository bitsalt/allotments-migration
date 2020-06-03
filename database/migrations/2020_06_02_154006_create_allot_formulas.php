<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotFormulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allot_formulas', function (Blueprint $table) {
            $table->id();
            $table->integer('school_year');
            $table->foreignId('allot_type_id')->nullable();
            $table->foreignId('school_grade_level_id')->nullable();
            $table->foreignId('school_type_id')->nullable();
            $table->string('description', 50)->nullable();
            $table->integer('display_order')->default(1)->nullable();
            $table->foreignId('allot_formulas_meta_id')->nullable();
            $table->decimal('base_amt', 10, 2)->nullable();
            $table->string('mbr_range_ind')->nullable();
            $table->decimal('mbr_range_low', 10, 2)->nullable();
            $table->decimal('mbr_range_high', 10, 2)->nullable();
            $table->decimal('mbr_range_amt', 10, 2)->nullable();
            $table->string('mbr_adj_ind')->nullable();
            $table->string('round_ind')->nullable();
            $table->decimal('mbr_range_low', 10, 2)->nullable();
            $table->decimal('mbr_range_high', 10, 2)->nullable();
            $table->decimal('mbr_range_amt', 10, 2)->nullable();
            $table->dateTime('date_created');
            $table->dateTime('date_modified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allot_formulas');
    }
}
