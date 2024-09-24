<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Commands\CreateRole;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner',
        ]);

        $studentRole = Role::create([
            'name' => 'student',
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher',
        ]);

        $userOwner = User::create([
            'name' => 'Owner User',
            'occupation' => 'Business Owner',
            'avatar' => 'images/default-user.png',
            'email' => 'owner@example.com',
            'password' => bcrypt('password')
        ]);

        $userOwner->assignRole($ownerRole);
    }
}