<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->delete();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
        User::factory()->create([
            'name' => 'HRD',
            'email' => 'HRD123@gmail.com',
            'role' => 'HRD',
            'password' => bcrypt('HRD12345'),
        ]);
        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'role' => 'manager',
            'password' => bcrypt('manager123'),
        ]);
        User::factory()->create([
            'name' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'role' => 'pegawai',
            'password' => bcrypt('pegawai123'),
        ]);
    }
}
