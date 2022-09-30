<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
      [
        'username' => 'admin',
        'password' => Hash::make('admin'),
        'level' => 'admin',
      ],
      [
        'username' => 'staff',
        'password' => Hash::make('staff'),
        'level' => 'staff',
      ],
      [
        'username' => 'doctor',
        'password' => Hash::make('doctor'),
        'level' => 'doctor',
      ],
      [
        'username' => 'billing',
        'password' => Hash::make('billing'),
        'level' => 'billing',
      ],
    ]);
  }
}
