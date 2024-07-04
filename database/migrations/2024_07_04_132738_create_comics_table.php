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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->string("description", 100);
            $table->string("thumb", 100);
            $table->string("price", 100);
            $table->string("series", 100);
            $table->string("sale_date", 100);
            $table->string("type", 100);
            $table->string("artists", 100);
            $table->string("writers", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
