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
            $table->string('kepalaProdi')->nullable();
            $table->string('akreditasi')->nullable();
            $table->integer('tahunBerdiri')->nullable();
            $table->string('ruangProdi')->nullable();
            $table->integer('jumlahMahaSiswa')->nullable();
            $table->string('diagramAlir')->nullable();
            $table->foreignId('ormawas_id')->nullable();
            $table->foreignId('jurusans_id')->nullable();
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
