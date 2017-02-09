<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KotaSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(KendaraansTableSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(RolesUsersSeeder::class);
    }
}
