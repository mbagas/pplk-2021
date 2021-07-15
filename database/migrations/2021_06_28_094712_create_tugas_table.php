<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tugas', function (Blueprint $table) {
      $table->id();
      $table->string('judul')->nullable();
      $table->text('deskripsi')->nullable();
      $table->string('format')->nullable();
      $table->string('file')->nullable();
      $table->dateTime('start_time')->nullable();
      $table->dateTime('end_time')->nullable();
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
    Schema::dropIfExists('tugas');
  }
}
