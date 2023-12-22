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
            ['name' => 'Buku tulis', 'harga' => '5000', 'stok' => '50', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tas', 'harga' => '150000', 'stok' => '10', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'pensil', 'harga' => '2000', 'stok' => '30', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Penghapus', 'harga' => '2000', 'stok' => '50', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Penggaris', 'harga' => '3000', 'stok' => '20', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('items')->insert($items);
    }
}
