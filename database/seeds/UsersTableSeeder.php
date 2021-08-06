<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dinas Pariwisata',
            'username' => 'dinasp',
            'email' => 'dinaspariwisata@gmail.com',
            'role' => 'Dinas Pariwisata',
            'password' => bcrypt('pecabs')
        ]);
    }
}
