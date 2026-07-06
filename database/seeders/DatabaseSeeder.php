<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
>>>>>>> djuedev

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
=======
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
>>>>>>> djuedev
        ]);
    }
}
