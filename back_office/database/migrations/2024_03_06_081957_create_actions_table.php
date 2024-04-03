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
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date')->nullable();
            $table->time('heure')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('code_postal')->nullable();
            $table->integer('ville')->nullable();
            $table->integer('nb_inscrits')->nullable();
            $table->integer('nb_sensibilises')->nullable();
            $table->boolean("is_private")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
