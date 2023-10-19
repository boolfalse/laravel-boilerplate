<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class SetRolesPriorities extends Seeder
{
    public function run()
    {
        $role_priorities = config('project.roles_priorities');

        $roles = Role::all();

        foreach ($roles as $role) {
            $role->priority = $role_priorities[$role->alias];
            $role->save();
        }
    }
}
