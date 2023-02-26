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
            'icon' => 'null',
            'position' => 1,
            'enable' => true,
            'actives' => 'dashboard'
        ]);
        Navigation::create([
            'parent_id' => null,
            'name' => 'test menu2',
            'url' => 'dashboard',
            'icon' => 'null',
            'position' => 2,
            'enable' => true,
            'actives' => 'dashboard'
        ]);
    }
}
