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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('details');
            $table->boolean('animation')->nullable();
            $table->boolean('fullbody')->nullable();
            $table->boolean('background')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('fandom_id');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('fandom_id')->references('id')->on('fandom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
