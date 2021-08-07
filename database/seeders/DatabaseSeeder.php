<?php

namespace Database\Seeders;

use App\Models\KategoriGame;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            JurusanSeeder::class,
            KategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            KategoryGameSeeder::class
        ]);
    }
}
