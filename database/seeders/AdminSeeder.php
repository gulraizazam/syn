<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'), // Use Hash::make for security
            'role' => 'admin',
        ];

        User::create($admin);
    }
}
