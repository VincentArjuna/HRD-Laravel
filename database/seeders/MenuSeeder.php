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
            'name' => 'Company Asset',
            'url' => '#',
            'icon' => 'BuildingOffice2Icon',
            'position' => 2,
            'enable' => true,
            'actives' => [
                'company-assets.*',
            ],
            'permission_name' => 'menu-management-menu'
        ]);

        Menu::create([
            'parent_id' => 2,
            'name' => 'Asset List',
            'url' => 'company-assets.index',
            'icon' => 'Bars4Icon',
            'position' => 1,
            'enable' => true,
            'actives' => [
                'company-assets.index',
            ],
            'permission_name' => 'view-menu-list'
        ]);

        Menu::create([
            'parent_id' => null,
            'name' => 'Employee',
            'url' => '#',
            'icon' => 'UserGroupIcon',
            'position' => 3,
            'enable' => true,
            'actives' => [
                'employee-profiles.*',
            ],
            'permission_name' => ''
        ]);
        Menu::create([
            'parent_id' => 4,
            'name' => 'Employee List',
            'url' => 'employee-profiles.index',
            'icon' => 'UsersIcon',
            'position' => 1,
            'enable' => true,
            'actives' => [
                'employee-profiles.index',
            ],
            'permission_name' => ''
        ]);
    }
}
