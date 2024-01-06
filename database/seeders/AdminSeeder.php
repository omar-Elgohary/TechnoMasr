<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'phone' => '01236547896',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('12345678'),
            'photo' => null,
            'is_admin' => 1,
            'role_id' => 1,
        ]);
    }
}
