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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 150);
            $table->string('leaving_station');
            $table->string('arriving_station');
            $table->time('leaving_time', $precision = 0);
            $table->time('arriving_time', $precision = 0);
            $table->string('train_code',32);
            $table->smallInteger('carriages')->unsigned();
            $table->boolean('in_time');
            $table->boolean('deleted');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
