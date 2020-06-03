<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotmentTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allotment_types', function (Blueprint $table) {
            $table->id();
            $table->integer('school_year');
            $table->char('allotment_prog_code', 20)->nullable();
            $table->char('allotment_prog_desc', 100)->nullable();
            $table->foreignId('category_id')->nullable();
            $table->char('data_link', 200)->nullable();
            $table->tinyInteger('is_carryover');
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
        Schema::dropIfExists('allotment_types');
    }
}
