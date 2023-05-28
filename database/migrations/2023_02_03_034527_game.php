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
        Schema::create('games', function (Blueprint $table) {
            $table->id('game_id');
            $table->string('name_game');
            $table->text('deskripsi_game');
            $table->foreignId('kategori_id');
            $table->string('poster_file');
            $table->string('gameplay_file');
            $table->string('video_file');
            $table->string('banner_file');
            $table->integer('harga_game');
            $table->integer('harga_diskon');
            $table->string('status_game');
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
        Schema::dropIfExists('game');
    }
};
