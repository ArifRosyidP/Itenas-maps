<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\DBAL;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listservers', function (Blueprint $table) {
            $table->id();
            $table->integer('vmid')->unique();
            $table->string('nama')->nullable();
            $table->string('fungsi')->nullable();
            $table->string('ip')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('vcpu')->nullable();
            $table->integer('hdd')->nullable();
            $table->timestamps();
        });

        // Schema::table('listservers', function (Blueprint $table) {
        //     $table->string('nama')->nullable()->change();
        //     $table->string('fungsi')->nullable()->change();
        //     $table->string('ip')->nullable()->change();
        //     $table->integer('ram')->nullable()->change();
        //     $table->integer('vcpu')->nullable()->change();
        //     $table->integer('hdd')->nullable()->change();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listservers');
    }
};