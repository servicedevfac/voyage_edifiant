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
        Schema::create('teambuildings', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('nom_lieu');
            $table->string('activite');
            $table->string('courte_description');
            $table->text('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teambuildings');
    }
};
