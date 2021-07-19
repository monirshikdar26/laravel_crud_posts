<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1],[
            'name' => 'Manir',
            'email' => 'manir.zaman@seu.edu.bd',
            'password' => '$2y$10$K5sDhyLncNXgvHnfO1wIZu0sx1EJ93cWPlk0kQaESnida.JxNapYa' //password
        ]);
    }
}
