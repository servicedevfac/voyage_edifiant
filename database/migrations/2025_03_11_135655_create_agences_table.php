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
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('numero');
            $table->string('presidence');
            $table->string('destination');
            $table->date('apartirdu');
            $table->date('jusquau');
            $table->integer('nbrejour');
            $table->integer('nbreadulte');
            $table->integer('nbrenft');
            $table->integer('nbrebebe');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agences');
    }
};
