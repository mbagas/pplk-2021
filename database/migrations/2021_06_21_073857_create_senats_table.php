<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senats', function (Blueprint $table) {
            $table->id();
            $table->string('ketua', 30);
            $table->text('deskripsi');
            $table->string('website', 50);
            $table->string('youtube', 50);
            $table->string('instagram', 50);
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
        Schema::dropIfExists('senats');
    }
}
