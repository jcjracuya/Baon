<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('lname', 255);
            $table->string('fname', 255);
            $table->string('addr', 255);
            $table->string('username', 255);
            $table->string('contactno', 255);
            $table->tinyInteger('type');
            $table->tinyInteger('status');

            $table->string('email')->unique();
            $table->string('password', 60);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
