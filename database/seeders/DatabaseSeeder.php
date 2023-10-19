<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionTemplatesTableSeeder::class);
        $this->call(SetRolesPriorities::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
    }
}
