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
        'pegawai_id' => '2',
        'username' => 'admin',
        'password' => Hash::make('admin'),
        'level' => 'admin',
      ],
      [
        'pegawai_id' => '3',
        'username' => 'staff',
        'password' => Hash::make('staff'),
        'level' => 'staff',
      ],
      [
        'pegawai_id' => '4',
        'username' => 'doctor',
        'password' => Hash::make('doctor'),
        'level' => 'doctor',
      ],
      [
        'pegawai_id' => '5',
        'username' => 'billing',
        'password' => Hash::make('billing'),
        'level' => 'billing',
      ],
    ]);
  }
}
