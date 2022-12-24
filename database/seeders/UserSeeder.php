<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolePermissionConfig = config('role-permission', []);
        foreach($rolePermissionConfig as $role => $permissions) {
            $roleInfo = Role::findByName($role);

            $user = User::create([
                'role_id' => $roleInfo->id,
                'org_id' => 1,
                'name' => Str::headline($role),
                'email' => $role.'@project.com',
                'phone' => rand(1111111111, 9999999999),
                // 'email_verified_at' => \Carbon\Carbon::now(),
                'password' => bcrypt('password'),
            ]);

            $user->assignRole($role);
        }

        $this->command->info('User have been seeded');
    }
}
