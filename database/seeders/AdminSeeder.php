<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'admin',
            'last_name'=>'',
            'phone'=> '0543232323',
            'email'=>'admin@email.com',
            'role'=> 'admin',
            'password'=> bcrypt('123'),
        ]);
    }
}
