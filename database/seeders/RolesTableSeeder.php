<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = config('project.roles');

        foreach ($roles as $alias => $role_name) {
            Role::create([
                'name' => $role_name,
                'alias' => $alias,
            ]);
        }
    }
}
