<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('event_name')->nullable();

            $table->string('address')->nullable();
            $table->string('venue')->nullable();
            $table->string('picture')->nullable();



            $table->string('city')->nullable();
            $table->integer('State_id')->nullable();
            $table->string('zip')->nullable();
            $table->string('start_time')->nullable();

            $table->string('finish_time')->nullable();
            $table->string('event_date')->nullable();
            $table->string('slug')->nullable();
            $table->string('event_link')->nullable();
            $table->integer('discussion_id')->nullable();
            $table->integer('SongType_id')->nullable();
            $table->integer('nbr_like')->nullable();
            $table->integer('nbr_dislike')->nullable();
            $table->integer('nbr_views')->nullable();
            $table->integer('nbr_favorite')->nullable();
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
        Schema::dropIfExists('events');
    }
}
