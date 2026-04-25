<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('character', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('real_name');
            $table->enum('gender', ['male', 'female']);
            $table->foreignId('id_universe')->constrained('universe')->cascadeOnDelete();
            $table->string('new_column')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('character');
    }
};
