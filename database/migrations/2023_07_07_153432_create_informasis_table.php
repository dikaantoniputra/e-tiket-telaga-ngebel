<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('jam_buka')->nullable();
            $table->string('jam_tutup')->nullable();
            $table->string('hari_buka')->nullable();
            $table->string('hari_tutup')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('informasis');
    }
}
