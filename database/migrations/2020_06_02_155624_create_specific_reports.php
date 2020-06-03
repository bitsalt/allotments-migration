<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_reports', function (Blueprint $table) {
            $table->integer('report_id');
            $table->integer('user_id');
            $table->integer('app_id');
            $table->char('database', 40);
            $table->char('report_name', 40);
            $table->char('file_name', 40);
            $table->text('report_queries');
            $table->text('report_code');
            $table->char('report_params', 255);
            $table->char('get_session_vars', 1)->default('n');
            $table->enum('q_or_c', ['c','q'])->default('q');
            $table->char('return_as', 6);
            $table->char('view', 100);
            $table->timestamp('created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specific_reports');
    }
}
