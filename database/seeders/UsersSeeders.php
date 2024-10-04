<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = new User();
       $user->name = "Administrador";
       $user->email = "admin@example.com";
       $user->password = Hash::make('password');
       $user->save();
    }
}