<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

      DB::table('role_user')->truncate();

      $admin = User::create([
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'passsword' => Hash::make('password'),
      ]);

      $commercial =User::create([
        'name' => 'comptable',
        'email' => 'comptable@comptable.com',
        'passsword' => Hash::make('password'),
    ]);

    $comptable = User::create([
        'name' => 'commercial',
        'email' => 'commercial@commercial.com',
        'passsword' => Hash::make('password'),
    ]);

    $adminRole = Role::where('name', 'admin')->first();
    $commercialRole = Role::where('name', 'commercial')->first();
    $comptableRole = Role::where('name', 'comptable')->first();


    $admin->roles()->attach($adminRole);
    $commercial->roles()->attach($commercialRole);
    $comptable->roles()->attach($comptableRole);
    }
    
}
