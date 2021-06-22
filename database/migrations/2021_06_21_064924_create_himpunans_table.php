<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHimpunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('himpunans', function (Blueprint $table) {
            $table->id();
            $table->string('kodeWarna', 30);
            $table->string('pembina', 30);
            $table->string('ketuaHimpunan', 30);
            $table->integer('tahunBerdiri');
            $table->string('logo', 50);
            $table->text('filosofiLogo');
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
        Schema::dropIfExists('himpunans');
    }
}
