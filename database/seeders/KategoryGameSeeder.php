<?php

namespace Database\Seeders;

use App\Models\KategoriGame;
use Illuminate\Database\Seeder;

class KategoryGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori_game = [
            ['kategori'=>'findCode'],
            ['kategori'=>'tebakGedung'],
        ];
        KategoriGame::query()->insert($kategori_game);
    }
}
