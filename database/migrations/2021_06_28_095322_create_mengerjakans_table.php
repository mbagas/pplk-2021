<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMengerjakansTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mengerjakans', function (Blueprint $table) {
      $table->id();
      $table->foreignId('users_id');
      $table->foreignId('tugas_id');
      $table->integer('kelompok');
      $table->string('file')->nullable();
      $table->text('jawaban')->nullable();
      $table->integer('nilai')->nullable();
      $table->boolean('status')->nullable();
      $table->foreign('users_id')->references('id')->on('users');
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
    Schema::dropIfExists('mengerjakans');
  }
}
