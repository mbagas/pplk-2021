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
            $table->string('nama', 30)->nullable();
            $table->string('presiden', 30)->nullable();
            $table->string('sekjen', 30)->nullable();
            $table->string('organigram', 50)->nullable();
            $table->string('logo', 50)->nullable();
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
