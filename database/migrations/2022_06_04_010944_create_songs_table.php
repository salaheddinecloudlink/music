<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->integer('album_id')->nullable();
            $table->string('FeaturedArtist')->nullable();
            $table->string('song')->nullable();
            $table->string('picture')->nullable();
            $table->string('format')->nullable();
            $table->string('chkPassPort')->nullable();
            $table->string('formatPicture')->nullable();
            $table->string('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('size')->nullable();
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
        Schema::dropIfExists('songs');
    }
}
