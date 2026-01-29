<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasis = [
            [
                'nama_lokasi' => 'Stadion Utama',
                'aktif' => 'Y'
            ],
            [
                'nama_lokasi' => 'Galeri Seni Kota',
                'aktif' => 'Y'
            ],
            [
                'nama_lokasi' => 'Taman Kota',
                'aktif' => 'Y'
            ],
        ];

        foreach ($lokasis as $lokasi) {
            Lokasi::create($lokasi);
        }
    }
}