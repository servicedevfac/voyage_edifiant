<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Rôles et permissions
        $this->call([
            rolePermisionseed::class,
        ]);

        // 2. Utilisateur superadmin
        $user = User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ]
        );
        $user->assignRole('superadmin');

        // 3. Données de démonstration
        $this->call([
            ContactSeeder::class,
            AgenceSeeder::class,
            DevisteamSeeder::class,
            DecouverteSeeder::class,
            DevisvehiculeSeeder::class,
            TeambuildingSeeder::class,
            ParcVehiculeSeeder::class,
        ]);
    }
}
