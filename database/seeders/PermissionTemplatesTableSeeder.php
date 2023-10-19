<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTemplatesTableSeeder extends Seeder
{
    public function getAllSeedPermissionsForRole($role_id): array
    {
        $seed_actions_array = config('project.actions');
        $seed_permissions = [];

        foreach ($seed_actions_array as $actions_group_name => $actions_group) {
            foreach ($actions_group as $action => $description) {
                $seed_permissions[] = [
                    'role_id' => $role_id,
                    'action' => $actions_group_name.'.'.$action,
                    'description' => $description,
                    'access' => true, // TODO: allow/disallow permissions from config('project.seed.actions')
                ];
            }
        }

        return $seed_permissions;
    }

    public function run()
    {
        $role_ids = Role::all()->pluck('id');
        $all_seed_permissions = [];

        foreach ($role_ids as $role_id) {
            $all_seed_permissions = array_merge($all_seed_permissions, $this->getAllSeedPermissionsForRole($role_id));
        }

        DB::table('permission_templates')->insert($all_seed_permissions);
    }
}
