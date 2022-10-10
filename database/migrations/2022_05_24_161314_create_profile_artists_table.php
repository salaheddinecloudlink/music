<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_artists', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('stage_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('genre')->nullable();
            $table->string('avatar')->nullable();
            $table->string('journey')->nullable();
            $table->string('email')->nullable();
            $table->string('featured')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('website')->nullable();
            $table->string('bio')->nullable();

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
        Schema::dropIfExists('profile_artists');
    }
}
