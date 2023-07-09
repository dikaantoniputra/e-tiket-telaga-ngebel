<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Informasi;

class InformasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informasi::create([
            'slug' => 'informasi-1',
            'judul' => 'Informasi 1',
            'deskripsi' => 'Deskripsi informasi 1',
            'jam_buka' => '09:00',
            'jam_tutup' => '17:00',
            'hari_buka' => 'Senin',
            'hari_tutup' => 'Jumat',
            'gambar' => 'gambar-1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Informasi::create([
            'slug' => 'informasi-2',
            'judul' => 'Informasi 2',
            'deskripsi' => 'Deskripsi informasi 2',
            'jam_buka' => '10:00',
            'jam_tutup' => '18:00',
            'hari_buka' => 'Selasa',
            'hari_tutup' => 'Sabtu',
            'gambar' => 'gambar-2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data seeder lainnya sesuai kebutuhan
    }
}
