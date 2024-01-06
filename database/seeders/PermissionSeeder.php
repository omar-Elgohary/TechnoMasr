<?php
namespace Database\Seeders;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create([
            'name' => 'create role',
        ]);

        Permission::create([
            'name' => 'edit role',
        ]);

        Permission::create([
            'name' => 'delete role',
        ]);

        Permission::create([
            'name' => 'give role to user',
        ]);

        Permission::create([
            'name' => 'edit user',
        ]);

        Permission::create([
            'name' => 'delete user',
        ]);
    }
}
