<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->string('pembina')->nullable();
            $table->string('ketuaUmum')->nullable();
            $table->integer('tahunBerdiri')->nullable();
            $table->string('logo')->nullable();
            $table->text('filosofiLogo')->nullable();
            $table->string('barcode')->nullable();
            $table->foreignId('ormawas_id');
            $table->foreign('ormawas_id')->references('id')->on('ormawas')->onDelete('cascade');
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
        Schema::dropIfExists('ukms');
    }
}
