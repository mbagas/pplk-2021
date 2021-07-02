<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Ormawa;
use Illuminate\Database\Seeder;

class OrmawaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ormawa::query()->create([
            'id'=>1,
            'namaLengkap'=>'Test Ormawa',
            'namaSingkat'=>'TO',
            'kategoris_id'=>1
        ]);
//        $ormawa->sync(Kategori::find(1));
    }
}
