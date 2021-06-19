<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Op',
                'email' => 'op@stockscraper.com',
                'password' => bcrypt('SSop@123'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@stockscraper.com',
                'password' => bcrypt('SSadmin@123'),
            ]
        ];

        foreach ($users as $user) {
            User::updateOrCreate($user);
        }
    }
}
