<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->string('kepalaProdi', 50);
            $table->string('akreditasi', 2)->nullable();
            $table->integer('tahunBerdiri');
            $table->string('ruangProdi', 10)->nullable();
            $table->integer('jumlahMahaSiswa')->nullable();
            $table->string('diagramAlir', 50);
            $table->foreignId('ormawas_id');
            $table->foreignId('jurusans_id');
            $table->foreign('ormawas_id')->references('id')->on('ormawas')->onDelete('cascade');
            $table->foreign('jurusans_id')->references('id')->on('jurusans')->onDelete('cascade');
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
        Schema::dropIfExists('prodis');
    }
}
