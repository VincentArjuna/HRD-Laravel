<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'parent_id' => null,
            'name' => 'Dashboard',
            'url' => 'dashboard',
            'icon' => 'HomeIcon',
            'position' => 1,
            'enable' => true,
            'actives' => [
                'dashboard',
            ]
        ]);
        Menu::create([
            'parent_id' => null,
            'name' => 'User Management',
            'url' => '#',
            'icon' => 'UsersIcon',
            'position' => 2,
            'enable' => true,
            'actives' => [
                'users.*',
            ],
            'permission_name' => 'user-management-menu'
        ]);
        Menu::create([
            'parent_id' => null,
            'name' => 'Menu Management',
            'url' => '#',
            'icon' => 'BarsArrowDownIcon',
            'position' => 4,
            'enable' => true,
            'actives' => [
                'about',
            ],
            'permission_name' => 'menu-management-menu'
        ]);
        Menu::create([
            'parent_id' => 3,
            'name' => 'Menu List',
            'url' => 'about',
            'icon' => 'Bars4Icon',
            'position' => 1,
            'enable' => true,
            'actives' => [
                'about',
            ],
            'permission_name' => 'view-menu-list'
        ]);
        Menu::create([
            'parent_id' => 2,
            'name' => 'User List Test',
            'url' => 'users.index',
            'icon' => 'UserIcon',
            'position' => 1,
            'enable' => true,
            'actives' => [
                'users.index',
            ],
            'permission_name' => 'view-user-list'
        ]);
        Menu::create([
            'parent_id' => null,
            'name' => 'Roles & Permissions',
            'url' => '#',
            'icon' => 'ShieldCheckIcon',
            'position' => 3,
            'enable' => true,
            'actives' => [
                'roles.*',
                'permission.*'
            ],
            'permission_name' => 'role-permission-menu'
        ]);
        Menu::create([
            'parent_id' => 6,
            'name' => 'Roles',
            'url' => 'users.index',
            'icon' => 'UserGroupIcon',
            'position' => 1,
            'enable' => true,
            'actives' => [
                'roles.index',
            ],
            'permission_name' => 'view-role-menu'
        ]);
        Menu::create([
            'parent_id' => 6,
            'name' => 'Permissions',
            'url' => 'users.index',
            'icon' => 'LockClossedIcon',
            'position' => 2,
            'enable' => true,
            'actives' => [
                'permissions.index',
            ],
            'permission_name' => 'view-permission-menu'
        ]);
    }
}
