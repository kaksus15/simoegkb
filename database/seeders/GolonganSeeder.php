<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seeder Data Golongan
        Golongan::create([
            'golongan' => 'IV/c',
            'pangkat' => 'Pembina Utama Muda',
        ]);

        Golongan::create([
            'golongan' => 'IV/b',
            'pangkat' => 'Pembina Tk. I',
        ]);

        Golongan::create([
            'golongan' => 'IV/a',
            'pangkat' => 'Pembina',
        ]);

        Golongan::create([
            'golongan' => 'III/d',
            'pangkat' => 'Penata Tk.I',
        ]);

        Golongan::create([
            'golongan' => 'III/c',
            'pangkat' => 'Penata',
        ]);

        Golongan::create([
            'golongan' => 'III/b',
            'pangkat' => 'Penata Muda Tk.I',
        ]);

        Golongan::create([
            'golongan' => 'III/a',
            'pangkat' => 'Penata Muda',
        ]);

        Golongan::create([
            'golongan' => 'II/d',
            'pangkat' => 'Pengatur Tk. I',
        ]);

        Golongan::create([
            'golongan' => 'II/c',
            'pangkat' => 'Pengatur',
        ]);

        Golongan::create([
            'golongan' => 'II/b',
            'pangkat' => 'Pengatur Muda Tk. I',
        ]);

        Golongan::create([
            'golongan' => 'II/a',
            'pangkat' => 'Pengatur Muda',
        ]);
    }
}
