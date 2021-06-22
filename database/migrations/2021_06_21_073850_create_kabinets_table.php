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
            $table->string('nama', 30);
            $table->string('presiden', 30);
            $table->string('sekjen', 30);
            $table->string('organigram', 50);
            $table->string('logo', 50);
            $table->text('filosofiLogo');
            $table->text('deskripsi');
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
