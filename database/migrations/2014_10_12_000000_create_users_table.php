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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('adnumber');
            $table->string('faname');
            $table->string('maname');
            $table->string('section');
            $table->integer('year');
            $table->string('class');
            $table->integer('datepicker');
            $table->integer('phone');
            $table->string('address');
            $table->string('roll');
            $table->text('image');
            $table->string('is_approved');
            $table->string('gender');
            $table->string('dob');
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
