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
        Jurusan::query()->create([
            'namaLengkap'=>'Jurusan Tester',
            'namaSingkat'=>'JT',
            'kepalaJurusan'=>'Kepala tester',
            'ruangJurusan'=>001
        ]);

    }
}
