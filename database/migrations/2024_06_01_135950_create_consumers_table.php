<?php

use App\Models\Consumer;
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
        Schema::create('consumers', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email")->unique()->nullable();
            $table->string("phone")->unique()->nullable();
            $table->enum("contact_preference" , Consumer::CONTACT_PREFERENCE);
            $table->string("street");
            $table->smallInteger("apartment");
            $table->string("city");
            $table->string("state");
            $table->string("zipcode");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumers');
    }
};
