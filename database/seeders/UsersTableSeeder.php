<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $roles = Role::all()->pluck('alias', 'id')->toArray();
        $now = now();

        foreach ($roles as $role_id => $role_alias) {
            User::create([
                'role_id' => $role_id,
                'name' => config('project.dev.' . $role_alias . '.name'),
                'email' => config('project.dev.' . $role_alias . '.email'),
                'password' => bcrypt(config('project.dev.' . $role_alias . '.password')),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
