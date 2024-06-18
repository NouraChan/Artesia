<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artpiece', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('caption')->nullable();
            $table->string('occasion')->nullable();
            $table->date('finishing_date')->nullable();
            $table->unsignedBigInteger('album_id');
            $table->unsignedBigInteger('fandom_id');
            $table->foreign('album_id')->references('id')->on('album');
            $table->foreign('fandom_id')->references('id')->on('fandom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artpiece');
    }
};
