<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *
     * @return void
     */

     


     public function run()
     {
         User::create([
             'email' => 'admin@example.com',
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'slug' => 'admin',
             'role' => 'admin',
             'status' => 'aktiv'
         ]);
     }
}
