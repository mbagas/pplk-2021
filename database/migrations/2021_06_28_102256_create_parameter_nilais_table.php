<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('persen')->nullable();
            $table->foreignId('tugas_id')->nullable();
            $table->foreign('tugas_id')->references('id')->on('tugas');
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
        Schema::dropIfExists('parameter_nilais');
    }
}
