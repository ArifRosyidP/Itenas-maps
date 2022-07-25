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
        Schema::create('detail_asets', function (Blueprint $table) {
            $table->id();
            $table->integer('gedung')->nullable(true);
            $table->string('nama_golongan')->nullable(true);
            $table->string('deskripsi')->nullable(true);
            $table->integer('total')->nullable(true);
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
        Schema::dropIfExists('detail_asets');
    }
};
