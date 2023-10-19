<?php

namespace Database\Seeders;

use App\Models\PermissionTemplate;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function loadPermissionsForUser(User $user): array
    {
        $permission_templates = PermissionTemplate::select([
            'role_id',
            'action',
            'description',
            'access',
        ])->where('role_id', $user->role_id)->get();

        $seed_permissions = [];

        foreach ($permission_templates as $permission) {
            $seed_permissions[] = [
                'user_id' => $user->id,
                'role_id' => $user->role_id,
                'action' => $permission->action,
                'description' => $permission->description,
                'access' => $permission->access,
            ];
        }

        return $seed_permissions;
    }

    public function run()
    {
        $users = User::all();

        $all_permissions = [];
        foreach ($users as $user) {
            $permissions_for_user = $this->loadPermissionsForUser($user);
            $all_permissions = array_merge($all_permissions, $permissions_for_user);
        }

        DB::table('permissions')->insert($all_permissions);
    }
}
