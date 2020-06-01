<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('password', 16)->nullable();
            $table->string('salt', 20)->nullable();
            $table->string('role', 15);
            $table->string('email', 30)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->tinyInteger('passwd_reset');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
