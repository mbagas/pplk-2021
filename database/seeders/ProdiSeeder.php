<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::query()->create([
            'kepalaProdi'=>'Test Kaprodi',
            'akreditasi'=>'A',
            'tahunBerdiri'=>2016,
            'ruangProdi'=>'001',
            'jumlahMahasiswa'=>1000,
            'diagramAlir'=>'test',
            'ormawas_id'=>1,
            'jurusans_id'=>1
        ]);
    }
}
