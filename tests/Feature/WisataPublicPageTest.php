<?php

namespace Tests\Feature;

use App\Models\Wisata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WisataPublicPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_destination_page_uses_database_data(): void
    {
        Wisata::create([
            'nama' => 'Air Terjun Way Pisang',
            'slug' => 'air-terjun-way-pisang',
            'kategori' => 'Wisata Alam',
            'lokasi' => 'Lampung Barat',
            'harga' => 'Rp 75.000',
            'deskripsi' => 'Air terjun yang menyajikan panorama alam segar dan nyaman untuk keluarga.',
            'gambar' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80',
        ]);

        $response = $this->get('/destinasi/air-terjun-way-pisang');

        $response->assertOk();
        $response->assertSee('Air Terjun Way Pisang');
        $response->assertSee('Lampung Barat');
    }
}
