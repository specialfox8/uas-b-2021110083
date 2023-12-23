<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@likmi.ac.id',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'fox',
            'email' => 'fox@likmi.ac.id',
            'password' => bcrypt('12345678'),
            'is_admin' => false,
        ]);


        $this->call([
            ItemSeeder::class,
        ]);
    }
}
