<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'alamat' => 'Alamat Admin',
            'no_hp' => '08123456789',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'user',
            'alamat' => 'Alamat User',
            'no_hp' => '08129876543',
            'email' => 'user@example.com',
            'username' => 'user',
            'password' => Hash::make('123456'),
            'role' => 'user',
        ]);
    }
}
