<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wisata::insert([
            [
                'nama' => 'Pantai Kiluan',
                'slug' => 'pantai-kiluan',
                'kategori' => 'Pantai',
                'lokasi' => 'Tanggamus',
                'harga' => 'Rp 150.000',
                'deskripsi' => 'Pantai dengan sunset dan lumba-lumba.',
                'gambar' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Way Kambas',
                'slug' => 'way-kambas',
                'kategori' => 'Alam',
                'lokasi' => 'Lampung Timur',
                'harga' => 'Rp 200.000',
                'deskripsi' => 'Kawasan konservasi alam dan safari.',
                'gambar' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=1200&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Danau Ranau',
                'slug' => 'danau-ranau',
                'kategori' => 'Alam',
                'lokasi' => 'Lampung Barat',
                'harga' => 'Rp 120.000',
                'deskripsi' => 'Danau tenang untuk liburan santai.',
                'gambar' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
