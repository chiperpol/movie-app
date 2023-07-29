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
            $table->string('judul', 225);
            $table->text('desc');
            $table->unsignedBigInteger('tahun_terbit');
            $table->unsignedBigInteger('durasi');
            $table->unsignedBigInteger('negara_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('quality_id');
            $table->longText('cover');
            $table->longText('foto');
            $table->longText('film');
            $table->enum('status', [1, 0])->default(1);
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
