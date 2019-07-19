<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->string('username');
            $table->string('image');

            $table->date('date_of_birth');
            $table->enum('gender',['male','female']);
            $table->unsignedBigInteger('phone');
            $table->string('email')->unique();
            
            $table->string('address');
            $table->enum('user_role',['admin','supporter']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //$table->string('image'); not implement yet
            
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
        Schema::dropIfExists('users');
    }
}
