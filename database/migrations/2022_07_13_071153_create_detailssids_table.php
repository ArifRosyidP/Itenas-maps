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
            $table->foreignId('gedung_id')->unique();
            $table->foreignId('lantai_id')->unique();
            $table->foreignId('status_id')->unique();
            $table->string('nama_ssid');
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
