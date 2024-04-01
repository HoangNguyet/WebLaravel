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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roomId');
            $table->string('customerName', 50);
            $table->string('identification', 50); //do dai toi da la 50 ki tu
            $table->dateTime('checkin');
            $table->dateTime('checkout')->nullable();
            $table->integer('numberofhour')->nullable();
            $table->decimal('totalmoney', 12, 2)->nullable();
            $table->foreign('roomId')->references('id')->on('rooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
