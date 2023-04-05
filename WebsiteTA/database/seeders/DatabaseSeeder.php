<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    User::create([
        'name' => 'admin1',
        'password' => bcrypt('123'),
     ]);
 
     User::create([
         'name' => 'admin2',
         'password' => bcrypt('123'),
     ]);
 
     User::create([
         'name' => 'admin3',
         'password' => bcrypt('123'),
     ]);
 
     User::create([
         'name' => 'admin4',
         'password' => bcrypt('123'),
     ]);
 
     User::create([
         'name' => 'admin5',
         'password' => bcrypt('123'),
     ]);
    }
}
