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
        Schema::create('bureau_photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('titre');
            $table->string('legende');
            $table->foreignId('action_id')->constrained('actions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureau_photos');
    }
};
