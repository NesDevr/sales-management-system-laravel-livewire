<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Alex Morgan',
            'phone' => '5550101001',
            'email' => 'alex.admin@example.com',
            'profile' => 'super-admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('admin'),
            'image' => 'users/mapache.jpg'
        ]);
        User::create([
            'name' => 'Jordan Lee',
            'phone' => '5550101002',
            'email' => 'jordan.admin@example.com',
            'profile' => 'Super-Admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'Taylor Brooks',
            'phone' => '5550101003',
            'email' => 'taylor.admin@example.com',
            'profile' => 'Super-Admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'Casey Rivera',
            'phone' => '5550101004',
            'email' => 'casey.admin@example.com',
            'profile' => 'Super-Admin',
            'status' => 'ACTIVE',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'Riley Carter',
            'phone' => '5550101005',
            'email' => 'riley.employee@example.com',
            'profile' => 'Employee',
            'status' => 'LOCKED',
            'password' => bcrypt('admin')
        ]);
    }
}
