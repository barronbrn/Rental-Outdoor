<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PeralatanSeeder as SeedersPeralatanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(SeedersPeralatanSeeder::class);

        User::factory()->create([
            'name' => 'Admin Edelweis',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'role'=>'admin',
        ]);
    }
}
