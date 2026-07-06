<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('nom');
        });

        // Generate slugs for existing vehicules
        $vehicules = DB::table('vehicules')->get();
        foreach ($vehicules as $vehicule) {
            $slug = Str::slug($vehicule->nom);
            
            // Check for duplicate slugs
            $count = DB::table('vehicules')->where('slug', $slug)->where('id', '!=', $vehicule->id)->count();
            if ($count > 0) {
                $slug = $slug . '-' . $vehicule->id;
            }

            DB::table('vehicules')->where('id', $vehicule->id)->update(['slug' => $slug]);
        }
        
        // Optionally make it unique
        Schema::table('vehicules', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};
