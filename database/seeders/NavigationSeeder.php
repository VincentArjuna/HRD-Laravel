<?php

namespace Database\Seeders;

use App\Models\Navigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Navigation::create([
            'parent_id' => null,
            'name' => 'Dashboard Test',
            'url' => 'dashboard',
            'icon' => 'HomeIcon',
            'position' => 1,
            'enable' => true,
            'actives' => 'dashboard'
        ]);
        Navigation::create([
            'parent_id' => null,
            'name' => 'User Test',
            'url' => 'users.index',
            'icon' => 'UsersIcon',
            'position' => 2,
            'enable' => true,
            'actives' => 'users.index'
        ]);
        Navigation::create([
            'parent_id' => null,
            'name' => 'About Test',
            'url' => 'about',
            'icon' => 'InformationCircleIcon',
            'position' => 2,
            'enable' => true,
            'actives' => 'about'
        ]);
        Navigation::create([
            'parent_id' => 3,
            'name' => 'Children Test',
            'url' => 'about',
            'icon' => 'InformationCircleIcon',
            'position' => 1,
            'enable' => true,
            'actives' => 'about'
        ]);
    }
}
