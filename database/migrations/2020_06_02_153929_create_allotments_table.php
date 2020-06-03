<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allotments', function (Blueprint $table) {
            $table->id();
            $table->integer('school_id');
            $table->integer('school_year');
            $table->foreignId('allotment_type_id');
            $table->decimal('moe', 10, 2)->nullable();
            $table->decimal('conversions', 10, 2)->nullable();
            $table->decimal('carryover', 10, 2)->nullable();
            $table->longText('comments');
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
        Schema::dropIfExists('allotments');
    }
}
