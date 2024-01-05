<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('full_name', 100);
            $table->string('email', 100);
            $table->string('phone_number', 15);
            $table->string('password', 100);
            $table->text('token')->nullable();
            $table->boolean('is_login')->nullable();
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
        Schema::dropIfExists('x_users');
    }
}
