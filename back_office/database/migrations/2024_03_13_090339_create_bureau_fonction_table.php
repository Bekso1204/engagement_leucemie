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
        Schema::create('bureau_fonction', function (Blueprint $table) {
            $table->foreignId('bureau_id')
            ->constrained('bureaux')
            ->onUpdate('cascade')
            ->onDelete('cascade');   
        
            $table->foreignId('fonction_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');   

            $table->primary(['bureau_id', 'fonction_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureau_fonction');
    }
};
