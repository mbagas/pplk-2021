<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $jurusan = [
            [
                'namaLengkap' => 'Jurusan Teknologi Infrastruktur dan Kewilayahan',
                'namaSingkat' => 'JTIK',
                'kepalaJurusan' => 'Kepala tester',
                'ruangJurusan' => 001
            ],
            [
                'namaLengkap' => 'Jurusan Teknologi Produksi dan Industri',
                'namaSingkat' => 'JTPI',
                'kepalaJurusan' => 'Kepala tester',
                'ruangJurusan' => 001
            ],
            [
                'namaLengkap' => 'Jurusan Sains',
                'namaSingkat' => 'JS',
                'kepalaJurusan' => 'Kepala tester',
                'ruangJurusan' => 001
            ]
        ];
        Jurusan::query()->insert($jurusan);

    }
}
