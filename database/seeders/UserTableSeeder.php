<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create user data
        $userCreate = User::create([
            'name' => 'Javiera Rahmadhany',
            'email' => 'kazuha004@gmail.com',
            'password' => bcrypt('admin')
        ]);

        //assign permission to role
        $role = Role::find(1);
        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        //assign permission with role to user
        $user = User::find(1);
        $user->assignRole($role->name);
    }
}
