<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     *  @param \Illuminate\Database\Schema\Blueprint
     */
    public function up(): void
    {
        Schema::create('ocene', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('predmet',64);
            $table->unsignedInteger('ocena');
            $table->string('profesor',64);
            $table->timestamps();
        });

        Schema::table('ocene', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocene');
    }
};
