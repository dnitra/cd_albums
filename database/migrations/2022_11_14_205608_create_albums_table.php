<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger("genre_id")->nullable();
            $table->unsignedBigInteger("interpreter_id")->nullable();
            $table->string("title", 50);
            $table->string("img_url", 3000)->nullable();
            $table->integer("year_released")->nullable();
            $table->integer("price")->nullable();
            $table->integer("rating")->nullable();
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
};
