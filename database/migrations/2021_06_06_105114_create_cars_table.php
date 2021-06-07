<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('merk');
            $table->text('deskripsi')->nullable();
            $table->year('tahun');
            $table->bigInteger('harga');
            $table->string('image');
            $table->string('status');
            $table->integer('isi_silinder');
            $table->string('transmisi');
            $table->integer('tenaga');
            $table->integer('torsi');
            $table->string('bahan_bakar');
            $table->integer('kapasitas');
            $table->integer('panjang');
            $table->integer('tinggi');
            $table->integer('lebar');
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
        Schema::dropIfExists('cars');
    }
}
