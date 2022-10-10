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
<<<<<<< HEAD
            $table->customer_id();
            $table->subscription_id();
=======
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
            $table->string('name')->nullable()->default('user');
            $table->string('user_type');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
<<<<<<< HEAD
            $table->string('Accept');
=======
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
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