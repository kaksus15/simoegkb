<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seeder Data Jabatan
        Jabatan::create([
            'jabatan' => 'Kepala DP3KB',
        ]);

        Jabatan::create([
            'jabatan' => 'Sekretaris',
        ]);

        Jabatan::create([
            'jabatan' => 'Kabid PPPA',
        ]);

        Jabatan::create([
            'jabatan' => 'Kabid Dalduk, Penyuluhan & Penggerakan',
        ]);

        Jabatan::create([
            'jabatan' => 'Kabid KB, Ketahanan & Kesejahteraan Keluarga',
        ]);
    }
}
