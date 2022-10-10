<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('album_name')->nullable();
            $table->string('video')->nullable();
            $table->string('picture')->nullable();
            $table->integer('discussion_id')->nullable();
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
        Schema::dropIfExists('albums');
    }
}
