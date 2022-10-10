<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newws', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('Tag')->nullable();
            $table->string('picture')->nullable();
            $table->string('description')->nullable();
            $table->string('featured')->nullable();
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
        Schema::dropIfExists('newws');
    }
}
