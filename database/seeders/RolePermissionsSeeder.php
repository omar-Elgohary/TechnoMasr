<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('role_permission')->insert([
            'role_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 1,
            'permission_id' => 3,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 1,
            'permission_id' => 4,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 1,
            'permission_id' => 5,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 1,
            'permission_id' => 6,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 2,
            'permission_id' => 6,
        ]);

        DB::table('role_permission')->insert([
            'role_id' => 3,
            'permission_id' => 5,
        ]);
    }
}
