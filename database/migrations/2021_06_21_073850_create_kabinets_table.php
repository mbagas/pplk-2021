<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabinetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabinets', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('presiden')->nullable();
            $table->string('sekjen')->nullable();
            $table->string('organigram')->nullable();
            $table->string('logo')->nullable();
            $table->text('filosofiLogo')->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('kabinets');
    }
}
