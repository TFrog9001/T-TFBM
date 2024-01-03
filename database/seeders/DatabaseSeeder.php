<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ trong bảng Users
        DB::table('Users')->delete();

        // Thêm dữ liệu users
        $users = [
            [
                'User_ID' => 'A0123456',
                'Name' => 'Admin',
                'Password' => Hash::make('password'),
                'DateOfBirth' => '2002-03-03',
                'Nationality' => 'Vietnam',
                'Role_ID' => 1, // ID của quyền admin
            ],
            [
                'User_ID' => 'S0123456',
                'Name' => 'Vicker Nau',
                'Password' => Hash::make('password'),
                'DateOfBirth' => '2002-03-03',
                'Nationality' => 'Vietnam',
                'Role_ID' => 2, // ID của quyền admin
            ],
            [
                'User_ID' => 'C0123456',
                'Name' => 'Coach',
                'Password' => Hash::make('password'),
                'DateOfBirth' => '1995-05-05',
                'Nationality' => 'Portol',
                'Role_ID' => 3, // ID của quyền coach
            ],
            [
                'User_ID' => 'P0123456',
                'Name' => 'Jack Grealish',
                'Password' => Hash::make('password'),
                'DateOfBirth' => '2000-10-10',
                'Nationality' => 'England',
                'Role_ID' => 4, // ID của quyền player
            ],
            // Thêm user khác nếu cần
        ];

        // Chèn dữ liệu vào bảng Users
        DB::table('Users')->insert($users);
    }
}
