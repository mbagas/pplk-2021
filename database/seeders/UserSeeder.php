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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'nim' => 120140044,
            'kelompok' => 44,
            'roles_id' => 1,
            'instagram' => 'instagram.com/yaelahfal_'
        ]);
    }
}
