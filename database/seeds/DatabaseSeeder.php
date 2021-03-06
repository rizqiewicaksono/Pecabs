<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinsiTableSeeder::class);
        $this->call(KotaTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProvinsisTableSeeder::class);
    }
}
