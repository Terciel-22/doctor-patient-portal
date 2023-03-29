<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name' => 'Terciel Kenway',
               'email' => 'tercielkenway@gmail.com',
               'role' => 0,
               'password' => bcrypt('123456'),
            ],
            [
               'name' => 'Angelita Jamito',
               'email' => 'angelitajamito@gmail.com',
               'role' => 1,
               'password' => bcrypt('123456'),
            ],
            [
               'name' => 'Diether Fiel',
               'email' => 'dietherfiel@gmail.com',
               'role' => 2,
               'password' => bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
