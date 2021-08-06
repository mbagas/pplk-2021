<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTebakGedungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tebak_gedungs', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->string('pil1');
            $table->string('pil2');
            $table->string('pil3');
            $table->string('pil4');
            $table->string('jawaban');
            $table->foreignId('games_id');
            $table->foreign('games_id')->references('id')->on('games')->onDelete('cascade');
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
        Schema::dropIfExists('tebak_gedungs');
    }
}
