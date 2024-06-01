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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("consumer_id")->constrained("consumers")->cascadeOnDelete();
            $table->boolean("agreement")->default(0);
            $table->boolean("home_insurance")->default(0);
            $table->boolean("auto_insurance")->default(0);
            $table->boolean("recreational_vehicle_insurance")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
