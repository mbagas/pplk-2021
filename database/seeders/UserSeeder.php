<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'nama' => 'Naufal',
            'email' => 'nopal@mail.com',
            'password' => '$2y$10$7iK48lGNngPIoMboAb1i5.PuiNGgIK9EheODiKCNBXu4.kx1pk.9.',
            'nim' => 120140044,
            'kelompok' => 44,
            'roles_id' => 1,
            'instagram' => 'instagram.com/yaelahfal_'
        ]);
    }
}
