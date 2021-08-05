<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_codes', function (Blueprint $table) {
            $table->id();
            $table->text('gambar');
            $table->text('nama');
            $table->string('code');
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
        Schema::dropIfExists('find_codes');
    }
}
