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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->text('desc');
            $table->integer('tahun_terbit', 20);
            $table->integer('durasi', 100);
            $table->unsignedBigInteger('negara_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('quality_id');
            $table->text('cover');
            $table->text('foto');
            $table->text('film');
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
        Schema::dropIfExists('movies');
    }
};
