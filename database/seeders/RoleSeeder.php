<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ trong bảng Roles
        DB::table('Roles')->delete();

        // Tạo dữ liệu mới
        $roles = [
            ['Role_name' => 'admin', 'Role_detail' => 'Administrator role'],
            ['Role_name' => 'staff', 'Role_detail' => 'Staff role'],
            ['Role_name' => 'coach', 'Role_detail' => 'Coach role'],
            ['Role_name' => 'player', 'Role_detail' => 'Player role'],
        ];

        // Chèn dữ liệu vào bảng
        DB::table('Roles')->insert($roles);
    }
}
