<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'role' => 'Super Admin'
            ],
            [
                'id' => 2,
                'role' => 'Tugas'
            ],
            [
                'id' => 3,
                'role' => 'Daplok/Mentor'
            ],
            [
                'id' => 4,
                'role' => 'Pendanaan'
            ],
            [
                'id' => 5,
                'role' => 'Maba'
            ],
            [
                'id' => 6,
                'role' => 'Ormawa'
            ]
        ];
        Role::query()->insert($roles);
    }
}
