<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\reservation_session;
use App\Models\setting;
use App\Models\allow_day;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
    allow_day::create([
        'allow_days' => 2,
    ]);

    allow_day::create([
        'allow_days' => 4,
    ]);

    setting::create([
        'kuota' => 20,
        'date_interval' => 10,
    ]);

    reservation_session::create([
        'session_name' => 'sesi 1',
        'start_time' => '09:00',
        'end_time'=> '11:00',
    ]);

    reservation_session::create([
        'session_name' => 'sesi 2',
        'start_time' => '15:00',
        'end_time'=> '17:00',
    ]);
           
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
