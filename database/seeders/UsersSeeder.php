<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Paulo',
            'lastName' => 'Eremita',
            'email' => 'pauloeremita@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
