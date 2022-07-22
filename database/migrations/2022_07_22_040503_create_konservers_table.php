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
        Schema::create('konservers', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->string('cpu')->nullable(true);
            $table->integer('memori')->nullable(true);
            $table->integer('qty')->nullable(true);
            $table->string('kondisi');
            $table->integer('tahun');
            $table->string('gambar')->nullable(true);
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
        Schema::dropIfExists('konservers');
    }
};