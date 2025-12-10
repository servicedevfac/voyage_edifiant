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
        Schema::create('decouvertes', function (Blueprint $table) {
            $table->id();
            $table->string("nom_ville");
            $table->string("titre");
            $table->text("description");
            $table->string('imageprincipale');
            $table->string('slug')->unique();
            $table->string('imagesecondaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decouvertes');
    }
};
