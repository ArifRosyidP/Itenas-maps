<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailssids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gedung_id');
            $table->foreignId('lantai_id');
            $table->integer('jml');
            $table->string('nama_ssid');
            $table->foreignId('status_id');
            $table->string('keterangan');
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
        Schema::dropIfExists('detailssids');
    }
};