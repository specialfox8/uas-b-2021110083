<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Buku tulis', 'price' => '5000', 'stock' => '50', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tas', 'price' => '150000', 'stock' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pensil', 'price' => '2000', 'stock' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Penghapus', 'price' => '2000', 'stock' => '50', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Penggaris', 'price' => '3000', 'stock' => '20', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pulpen', 'price' => '5000', 'stock' => '25', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Busur', 'price' => '4500', 'stock' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spidol', 'price' => '8000', 'stock' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kertas HVS A4', 'price' => '500', 'stock' => '100', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kertas HVS F4', 'price' => '500', 'stock' => '100', 'created_at' => now(), 'updated_at' => now()],

        ];

        DB::table('items')->insert($items);
    }
}
